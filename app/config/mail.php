<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Mail Driver
	|--------------------------------------------------------------------------
	| Supported: "smtp", "mail", "sendmail", "mailgun", "mandrill", "log"
	|
	*/

	'driver' => 'mandrill',

	'host' => $_ENV['SMTP_HOST'],

	'port' => $_ENV['SMTP_PORT'],

	'from' => array('address' => 'coffee@coffeerun.ca', 'name' => 'Cofee Run App'),

	'encryption' => $_ENV['SMTP_ENCRYPTION'],

	'username' => $_ENV['SMTP_USERNAME'],

	'password' => $_ENV['SMTP_PASSWORD'],


	'sendmail' => '/usr/sbin/sendmail -bs',

	/*
	|--------------------------------------------------------------------------
	| Mail "Pretend"
	|--------------------------------------------------------------------------
	|
	| When this option is enabled, e-mail will not actually be sent over the
	| web and will instead be written to your application's logs files so
	| you may inspect the message. This is great for local development.
	|
	*/

	'pretend' => false,

);
