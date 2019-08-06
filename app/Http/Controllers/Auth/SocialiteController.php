<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

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
        $socialiteUser = \Socialite::driver($driver)->user();

        $user = User::where("{$driver}_id", $socialiteUser->id)->first();

        if (!$user) {
            $user = User::where('email', $socialiteUser->email)->first();

            if ($user) {
              $user["{$driver}_id"] = $socialiteUser->id;

              $user->save();
            } else {
              $user = User::create([
                  'name' => $socialiteUser->name,
                  'email' => $socialiteUser->email,
                  'password' => '',
                  "{$driver}_id" => $socialiteUser->id,
              ]);
            }
        }

        \Auth::login($user);

        return redirect()->to('/');
    }
}
