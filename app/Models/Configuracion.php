<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Configuracion
 *
 * @property $id
 * @property $name
 * @property $nit
 * @property $georeferencing
 * @property $economic_activity
 * @property $risk_level
 * @property $number_of_workers
 * @property $legal_nature
 * @property $telephone_contacts
 * @property $email
 * @property $type_of_company
 * @property $updated_at
 * @property $created_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Configuracion extends Model
{
    
    static $rules = [
		'name' => 'required',
		'nit' => 'required',
		'georeferencing' => 'required',
		'economic_activity' => 'required',
		'legal_nature' => 'required',
		'telephone_contacts' => 'required',
		'email' => 'required',
		'type_of_company' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','nit','georeferencing','economic_activity','risk_level','number_of_workers','legal_nature','telephone_contacts','email','type_of_company'];



}
