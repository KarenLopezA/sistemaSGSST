<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

//Spatie
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Authenticatable
{

    static $rules = [
		'name' => 'required',
		'email' => 'required',
        'password' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email', 'password','lastname','identification','telephone','cellphone','address', 'role_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function role(){
        return $this->belongsTo('App\Models\roles');
    }

    public function isAdmin(){
        if($this->role<>null && $this->role->name == 'administrador')
            return true;
        return false;
    }

    public function isSgSst(){
        if($this->role<>null && $this->role->name == 'sg-sst')
            return true;
        return false;
    }

    public function isCocola(){
        if($this->role<>null && $this->role->name == 'cocola')
            return true;
        return false;
    }

    public function isCopasst(){
        if($this->role<>null && $this->role->name == 'copasst')
            return true;
        return false;
    }

    public function isBe(){
        if($this->role<>null && $this->role->name == 'be')
            return true;
        return false;

    }
}
