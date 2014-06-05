<?php

class ProfileController extends BaseController
{

    public function index()
    {
        $user = Sentry::getUser();

        // Redirect to profile update if user has one already.
        if (!$user->profile) {
            return Redirect::to('profile/create');
        }

        return View::make('profiles.index', ['user' => $user]);
    }

    /**
     * Create user profile.
     *
     * @return mixed
     */
    public function create()
    {
        $user = Sentry::getUser();

        // Redirect to profile update if user has one already.
        if ($user->profile) {
            return Redirect::to('profile/update');
        }

        if (Request::isMethod('post')) {
            $validate = $this->validateInput(Input::all());
            $validator = $validate['validator'];

            if ($validator->passes()) {
                $data = $validate['data'];

                $user->first_name = $data['first_name'];
                $user->last_name = $data['last_name'];
                $user->save();

                // TODO: Move profile image to /assets/images/profile

                // Create the Profile object, set the data, then save.
                $profile = new Profile(Libraries\ModelHelper::buildArray($data, [
                        'photo', 'mobile', 'birth_date', 'gender'], true));
                $user->profile()->save($profile);

                // Save the address data. This will be optional.
                $address = Libraries\ModelHelper::buildArray($data, [
                    // TODO: Add the latitude and longitude when working with the Geolocation feature.
                    'address1', 'address2', 'city', 'province', 'country', 'postal_code'
                ]);
                if (!empty($address)) {
                    $user->address()->create($address);
                }

                return Redirect::to('profile/update')->withMessage(['success' => 'Profile saved.']);
            }

            return Redirect::back()->withErrors($validator)->withInput();
        }

        return View::make('profiles.create', ['user' => $user, 'update' => false]);
    }

    /**
     * Update user profile.
     *
     * @return mixed
     */
    public function update()
    {
        $user = Sentry::getUser();

        // Redirect to create profile if user has none yet.
        if (!$user->profile) {
            return Redirect::to('profile/create');
        }

        if (Request::isMethod('post')) {
            $validate = $this->validateInput(Input::all());
            $validator = $validate['validator'];

            if ($validator->passes()) {
                $data = $validate['data'];

                // Update the user's full name
                $user->first_name = $data['first_name'];
                $user->last_name = $data['last_name'];
                $user->save();

                // Update profile data
                $user->profile()->update(Libraries\ModelHelper::buildArray($data, [
                    'photo', 'mobile', 'birth_date', 'gender'], true));

                // Update or save the address data. This will be optional.
                $address = Libraries\ModelHelper::buildArray($data, [
                    // TODO: Add the latitude and longitude when working with the Geolocation feature.
                    'address1', 'address2', 'city', 'province', 'country', 'postal_code'
                ]);
                if (!empty($address)) {
                    if ($user->address) {
                        $user->address()->update($address);
                    } else {
                        $user->address()->create($address);
                    }
                }

                return Redirect::back()->withMessage(['success' => 'Profile updated.']);
            }

            return Redirect::back()->withErrors($validator)->withInput();
        }

        return View::make('profiles.create', ['user' => $user, 'update' => true]);
    }

    /**
     * Validate the input data.
     *
     * @param $input Input array
     * @return array Returns the validator object and data.
     */
    private function validateInput($input)
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'address1' => 'max:255',
            'address2' => 'max:255',
            'city' => 'max:100',
            'province' => 'max:100',
            'postal_code' => 'max:20',
            'mobile' => 'numeric',
            'birth_date' => 'date',
            'country' => 'exists:countries,id',
            'gender' => 'in:male,female',
        ];

        $validator = Validator::make($input, $rules);
        $validator->getPresenceVerifier()->setConnection('mysqlgeo');

        return ['validator' => $validator, 'data' => $input];
    }


}