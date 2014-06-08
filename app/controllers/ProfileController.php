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
                $profile = new Profile([
                    'photo' => $data['photo'],
                    'address1' => $data['address1'],
                    'address2' => $data['address2'],
                    'city' => $data['city'],
                    'province' => $data['province'],
                    'country' => $data['country'],
                    'postal_code' => $data['postal_code'],
                    'mobile' => $data['mobile'],
                    'birth_date' => $data['birth_date'],
                    'gender' => $data['gender'],
                ]);
                $user->profile()->save($profile);

                return Redirect::back()->withMessage(['success' => 'Profile saved.']);
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

                // Update profile data
                $user->profile->photo = $data['photo'];
                $user->profile->address1 = $data['address1'];
                $user->profile->address2 = $data['address2'];
                $user->profile->city = $data['city'];
                $user->profile->province = $data['province'];
                $user->profile->country = $data['country'];
                $user->profile->postal_code = $data['postal_code'];
                $user->profile->mobile = $data['mobile'];
                $user->profile->birth_date = $data['birth_date'];
                $user->profile->gender = $data['gender'];

                $user->push(); // Save user and related models. In this case, the profile model.

                return Redirect::back()->withMessage(['success' => Lang::get('flash.profile_updated')]);
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