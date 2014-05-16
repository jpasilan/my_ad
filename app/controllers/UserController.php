<?php

class UserController extends BaseController
{

    /**
     * User registration
     *
     * @return mixed
     */
    public function register()
    {
        if (Request::isMethod('post')) {
            $rules = [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8',
                'password_confirmation' => 'required_with:password|same:password',
            ];

            $validator = Validator::make(Input::all(), $rules);
            if ($validator->passes()) {
                try {
                    $user = Sentry::register(Input::only('email', 'password', 'first_name', 'last_name'));

                    // Send activation code to the user.
                    Mail::send('emails.account-activation', ['activationCode' => $user->getActivationCode()],
                        function($message) {
                            $message->to(Input::get('email'), Input::get('first_name') . ' ' .
                                Input::get('last_name'))->subject("My-Ad Registration");
                        }
                    );

                    return Redirect::to('/')->withMessage(['success'
                        => 'Registration successful. We sent to your activation code to your email.']);
                } catch (Exception $e) {
                    return Redirect::back()->withMessage(['danger' => 'An error has occurred. Please try again.']);
                }
            } else {
                return Redirect::back()->withErrors($validator)->withInput();
            }
        }

        return View::make('users.register', ['hide_login' => true]);
    }

    /**
     * Confirm and activate a user account.
     *
     * @param $key
     * @return mixed
     */
    public function confirm($key)
    {
        try {
            $user = Sentry::findUserByActivationCode($key);

            if ($user->attemptActivation($key)) {
                return Redirect::to('login')->withMessage(['success' => 'Account activated. Please login.']);
            }
        } catch (Exception $e) {
            // Nothing here so just fall through.
        }

        return Redirect::to('/')->withMessage(['danger' => 'Invalid activation code.']);
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
     *
     * @return mixed
     */
    public function login()
    {
        if (Request::isMethod('post')) {
            try {
                $user = Sentry::authenticate(Input::only('email', 'password'), Input::has('remember_me') ? true : false);

                return Redirect::to('dashboard');
            } catch (Exception $e) {
                return Redirect::to('login')->withMessage(['danger' => 'Invalid email address or password.']);
            }
        }

        return View::make('users.login', ['hide_login' => true]);
    }

    /**
     * Logs out a user.
     *
     * @return mixed
     */
    public function logout()
    {
        Sentry::logout();

        return Redirect::to('/');
    }

    /**
     * Render logged in user dashboard.
     *
     * @return mixed
     */
    public function showDashboard()
    {
        return View::make('users.dashboard');
    }

} 