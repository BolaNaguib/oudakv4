<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialiteController extends Controller
{

    /**
     * Redirect the user to the provider authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($driver)
    {
        return \Socialite::driver($driver)->redirect();
    }

    /**
     * Obtain the user information from provider.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $request, $driver)
    {
        $socialiteUser = \Socialite::driver('google')->user();

        $user = User::where("{$driver}_id", $socialiteUser->id)->first();

        if ($user) {
            Auth::login($user);

            return LoginController::authenticated($request, $user);
        } else {
            // signup
            $input = [
                'name' => $socialiteUser->name,
                'email' => $socialiteUser->email,
            ];

            $request->session()->flash("{$driver}_token", $socialiteUser->accessToken);

            return RegisterController::showRegistrationForm()->withInput($input);
        }
    }

    /**
     * Redirect the user to the LinkedIn authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToLinkedIn()
    {
        return \Socialite::driver('linkedin')->redirect();
    }

    /**
     * Obtain the user information from LinkedIn.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleLinkedInCallback(Request $request)
    {
        $linkedinUser = \Socialite::driver('linkedin')->user();

        $user = User::whereLinkedinId($linkedinUser->id)->first();

        if ($user) {
            Auth::login($user);

            return LoginController::authenticated($request, $user);
        } else {
            list($first_name, $last_name) = explode(' ', $linkedinUser->name);
            // signup
            $input = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $linkedinUser->email,
            ];

            $request->session()->flash('linkedin_token', $linkedinUser->accessToken);

            return RegisterController::showRegistrationForm()->withInput($input)->with;
        }
    }
}
