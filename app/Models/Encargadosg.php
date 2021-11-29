<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Encargadosg
 *
 * @property $id
 * @property $name
 * @property $lastname
 * @property $identification
 * @property $study_level
 * @property $curriculum_pdf
 * @property $diploma_pdf
 * @property $curse_pdf
 * @property $health_pdf
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Encargadosg extends Model
{
    
    static $rules = [
		'name' => 'required',
		'lastname' => 'required',
		'identification' => 'required',
		'study_level' => 'required',
		'curriculum_pdf' => 'required',
		'diploma_pdf' => 'required',
		'curse_pdf' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','lastname','identification','study_level','curriculum_pdf','diploma_pdf','curse_pdf','health_pdf'];



}
