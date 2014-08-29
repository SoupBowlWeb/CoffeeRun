<?php

class HomeController extends BaseController {

	public function home()
	{
		return View::make('home');
	}


    public function makeARun()
    {
        $pastEmails = Auth::user()->pastEmails;

        return View::make( 'make-a-run' )->with([
            'pastEmails' => $pastEmails
        ]);
    }
}
