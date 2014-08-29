<?php namespace Mocha;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Mocha\Core\BaseModel;

class User extends BaseModel implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');



    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }


    public function pastEmails()
    {
        return $this->hasMany('Mocha\PastEmail', 'user_id');
    }

}
