<?php

class ProfileController extends BaseController
{

    /**
     * Shows the listing of profiles.
     *
     */
    public function index()
    {
        // Show the profile listing for admins.
    }


    /**
     * Render the profile of a user with id $id.
     *
     * @param int $id
     * @return mixed
     */
    public function show($id)
    {
        $user = User::find($id);

        if ( ! $user) {
            return Redirect::to('dashboard')->withMessage(['danger' => 'User not found.']);
        } else if ($user->id == Sentry::getUser()->id && ! $user->profile) {
            return Redirect::to('profile/create');
        } else if ( ! $user->profile) {
            return Redirect::to('dashboard')->withMessage(['danger' => Lang::get('flash.user_no_profile')]);
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
            return Redirect::to('profile/edit');
        }

        if (Request::isMethod('post')) {
            $validate = $this->validateInput(Input::all());
            $validator = $validate['validator'];

            if ($validator->passes()) {
                // Save the profile data.
                $this->save($user, $validate['data']);

                return Redirect::to('profile/edit')->withMessage(['success' => Lang::get('flash.profile_saved')]);
            }

            return Redirect::back()->withErrors($validator)->withInput();
        }

        return View::make('profiles.create', ['user' => $user, 'edit' => false]);
    }


    /**
     * Edit user profile.
     *
     * @return mixed
     */
    public function edit()
    {
        $user = Sentry::getUser();

        // Redirect to create profile if user has none yet.
        if ( ! $user->profile) {
            return Redirect::to('profile/create');
        }

        if (Request::isMethod('post')) {
            $validate = $this->validateInput(Input::all());
            $validator = $validate['validator'];

            if ($validator->passes()) {
                // Update the profile data.
                $this->update($user, $validate['data']);

                return Redirect::back()->withMessage(['success' => Lang::get('flash.profile_updated')]);
            }

            return Redirect::back()->withErrors($validator)->withInput();
        }

        return View::make('profiles.create', ['user' => $user, 'edit' => true]);
    }


    /**
     * Update the profile data. This is just a wrapper of the save method.
     *
     * @param User $user
     * @param array $data
     * @return void
     */
    private function update($user, $data)
    {
        return $this->save($user, $data, true);
    }


    /**
     * Save or update the profile data.
     *
     * @param User $user
     * @param array $data
     * @param bool $isUpdate
     * @return void
     */
    private function save($user, $data, $isUpdate = false)
    {
        // Update the user's full name
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->save();

        // Update or save the profile photo.
        if (isset($data['photo'])) {
            $photo = json_decode($data['photo']);
            if (Libraries\Helper\Image::move($photo->name, 'profile')) {
                if ($isUpdate && $user->photo) {
                    $user->photo()->update([
                        'original_name' => $photo->original_name,
                        'name' => $photo->name,
                        'type' => $photo->type,
                    ]);
                } else {
                    $user->photo()->create([
                        'original_name' => $photo->original_name,
                        'name' => $photo->name,
                        'type' => $photo->type,
                    ]);
                }
            }
        }

        // Update or save profile data
        if ($isUpdate) {
            $user->profile()->update(Libraries\Helper\Model::buildArray($data,
                ['mobile', 'birth_date', 'gender'], true));
        } else {
            $user->profile()->create(Libraries\Helper\Model::buildArray($data,
                ['mobile', 'birth_date', 'gender'], true));
        }

        // Update or save the address data. This will be optional.
        $address = Libraries\Helper\Model::buildArray($data, [
            // TODO: Add the latitude and longitude when working with the Geolocation feature.
            'address1', 'address2', 'city', 'province', 'country', 'postal_code'
        ]);
        if ( ! empty($address)) {
            if ($isUpdate && $user->address) {
                $user->address()->update($address);
            } else {
                $user->address()->create($address);
            }
        }

        return;
    }


    /**
     * Validate the input data.
     *
     * @param Input $input Input object
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