<?php


return [
    'providers' => array(
        'facebook' => array(
            'id' => $_ENV['FACEBOOK_APP_ID'],
            'secret' => $_ENV['FACEBOOK_APP_SECRET'],
            'redirect' => URL::to('facebook/login'),
            'scope' => array(),
        )
    )
];