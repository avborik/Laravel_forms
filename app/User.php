<?php

namespace App;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use FormAccessible;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the user's name for forms.
     *
     * @param  string  $value
     * @return string
     */
    public function formNameAttribute($value)
    {
        return strtoupper($value);
    }
}
