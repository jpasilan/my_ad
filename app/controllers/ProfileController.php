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
            $validator = $this->getValidator(Input::all());
            if ($validator->passes()) {
                $user->first_name = Input::get('first_name');
                $user->last_name = Input::get('last_name');
                $user->save();

                // Create the Profile object, set the data, then save.
                $profile = new Profile([
                    'photo' => Input::get('photo'),
                    'city' => Input::get('city'),
                    'country' => Input::get('country'),
                    'postal_code' => Input::get('postal_code'),
                    'mobile' => Input::get('mobile'),
                    'birth_date' => Input::get('birth_date'),
                    'gender' => Input::get('gender'),
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
            $validator = $this->getValidator(Input::all());
            if ($validator->passes()){
                $user->first_name = Input::get('first_name');
                $user->last_name = Input::get('last_name');

                // Update profile data
                $user->profile->photo = Input::get('photo');
                $user->profile->city = Input::get('city');
                $user->profile->country = Input::get('country');
                $user->profile->postal_code = Input::get('postal_code');
                $user->profile->mobile = Input::get('mobile');
                $user->profile->birth_date = Input::get('birth_date');
                $user->profile->gender = Input::get('gender');

                $user->push(); // Save user and related models. In this case, the profile model.

                return Redirect::back()->withMessage(['success' => 'Profile updated.']);
            }

            return Redirect::back()->withErrors($validator)->withInput();
        }

        return View::make('profiles.create', ['user' => $user, 'update' => true]);
    }

    /**
     * Get the profile validator object.
     *
     * @param $input Input object
     * @return Validator
     */
    private function getValidator($input)
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'city' => 'max:100',
            'province' => 'max:100',
            'postal_code' => 'max:20',
            'mobile' => 'integer|max:10',
            'birth_date' => 'date',
        ];

        return Validator::make($input, $rules);
    }

}