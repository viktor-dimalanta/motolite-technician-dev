<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname','email','address','status','outlet_name','outlet_address','outlet_branch','outlet_tel','distributor_name','distributor_address', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function notebooks()
    {
        return $this->hasMany(Notebook::class);
    }
    public function findForPassport($identifier) {
    return User::orWhere(‘email’, $identifier)->where(‘status’, 1)->first();
    }

}
