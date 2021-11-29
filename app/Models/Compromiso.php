<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compromiso
 *
 * @property $id
 * @property $name
 * @property $position_held
 * @property $signature_pdf
 *
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compromiso extends Model
{

    static $rules = [
		'name' => 'required',
		'position_held' => 'required',
		'signature_pdf' => 'required',

    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','position_held','signature_pdf'];



}
