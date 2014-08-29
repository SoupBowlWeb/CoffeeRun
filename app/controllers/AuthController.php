<?php

class AuthController extends BaseController {

    public function logout()
    {
        Auth::logout();
        return Redirect::route('home');
    }

    public function signInWithFacebook()
    {
        return OAuth::authorize('facebook');
    }

    public function facebookLogin()
    {
        try {
            OAuth::login('facebook', function($user, $details)
            {
                $user->first_name = $details->firstName;
                $user->last_name = $details->lastName;
                $user->email = $details->email;
                $user->picture = $details->imageUrl;
                $user->number_of_logins++;
                $user->save();
            });
        } catch (ApplicationRejectedException $e) {
            // User rejected application
        } catch (InvalidAuthorizationCodeException $e) {
            // Authorization was attempted with invalid
            // code,likely forgery attempt
        }
        return Redirect::route('home');
    }
}
