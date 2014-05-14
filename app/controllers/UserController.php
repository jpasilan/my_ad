<?php

class UserController extends BaseController
{

    /**
     * User registration
     *
     * @return View
     */
    public function register()
    {
        if (Request::isMethod('post')) {
            $rules = [
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8',
                'password_confirmation' => 'required_with:password|same:password',
                'first_name' => 'required',
                'last_name' => 'required',
            ];

            $validator = Validator::make(Input::all(), $rules);
            if ($validator->passes()) {
                try {
                    $user = Sentry::register([
                        'email' => Input::get('email'),
                        'password' => Input::get('password'),
                        'first_name' => Input::get('first_name'),
                        'last_name' => Input::get('last_name'),
                    ]);

                    $activationCode = $user->getActivationCode();

                    // Send activation code to the user.

                    return Redirect::to('/')->withMessage(['success'
                        => 'Registration successful. We sent to your email your activation code.']);
                } catch (Exception $e) {
                    // There's an exception error in Sentry::register. Check when able.
                }
            } else {
                return Redirect::back()->withErrors($validator)->withInput();
            }
        }

        return View::make('users.register');
    }

    /**
     * Password reset
     *
     */
    public function resetPassword()
    {

    }

    /**
     * Password reset request
     *
     */
    public function requestPassword()
    {

    }

    /**
     * Authenticate with social media credentials through OAuth.
     *
     * @param string $social
     * @return mixed
     */
    public function socialAuth($action = '')
    {
        if ($action == 'auth') {
            try {
                Hybrid_Endpoint::process();
            } catch(Exception $e) {
                return Redirect::route('hybridauth');
            }
        }

        $service = false;
        switch($action) {
            case 'facebook':
            //case 'google':
            //case 'twitter':
                $service = $action;
                break;
            default:
                break;
        }

        if ($service) {
            $socialAuth = new Hybrid_Auth(app_path() . '/config/local/hybridauth.php');
            $provider = $socialAuth->authenticate($service);
            $userProfile = $provider->getUserProfile();
            $provider->logout();

            // Save user profile fields through Sentry.
            // Logout from the provider
            // Login with Sentry.
            // Redirect to dashboard.
        }

        return Redirect::to('/');
    }

    /**
     * Logs in a user.
     */
    public function login()
    {
        if (Request::isMethod('post')) {
            $rules = [
                'email' => 'required|exists:users,email',
                'password' => 'required'
            ];

            $validator = Validator::make(Input::all(), $rules);
            if ($validator->passes()) {
                $credentials = [
                    'email' => Input::get('email'),
                    'password' => Input::get('password'),
                ];

                $user = Sentry::authenticate($credentials, false);
            } else {
                return Redirect::back()->withErrors($validator);
            }
        }

        return View::make('users.login');
    }

    /**
     * Logs out an authenticated user.
     *
     */
    public function logout()
    {
        return Redirect::to('/');
    }

} 