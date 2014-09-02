<?php

/* Public Routes */
Route::get( '/', [  'as' => 'home',
                    'uses' => 'HomeController@home' ]);

/* Auth Related Routes */
Route::get( 'sign-in-with-facebook' , [     'as' => 'signinWithFacebook',
                                            'uses' => 'AuthController@signInWithFacebook' ]);
Route::get( 'facebook/login' , 'AuthController@facebookLogin' );
Route::get('logout' , 'AuthController@logout');


/* Logged In Routes */
Route::group( ['before' => 'auth'] , function()
{
    Route::get( 'make-a-run' , 'HomeController@makeARun');
});


Route::get( 'foobar' , function()
{

    $data=  [];
    Mail::send('emails.hello', $data, function($message)
    {
        $message->to('dan@soupbowl.ca', 'Dan Soppelsa')->subject('Welcome to the Website');
    });
});