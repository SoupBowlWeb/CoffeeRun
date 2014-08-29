<?php namespace Mocha;

use Mocha\Core\BaseModel;

class PastEmail extends BaseModel {

    protected $table = 'past_emails';

    public function user()
    {
        return $this->belongsTo('Mocha\User', 'user_id');
    }


}
