<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aliado
 *
 * @property $id
 * @property $name
 * @property $nit
 * @property $certificate_pdf
 * @property $social_security_pdf
 * @property $security_file_pdf
 * @property
 * @property
 * @property
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Aliado extends Model
{

    static $rules = [
		'name' => 'required',
		'nit' => 'required',
		'certificate_pdf' => 'required',
		'social_security_pdf' => 'required',
		'security_file_pdf' => 'required',

    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','nit','certificate_pdf','social_security_pdf','security_file_pdf'];



}
