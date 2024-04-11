<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sede
 *
 * @property $id
 * @property $name
 * @property $descriptions
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sede extends Model
{
    
    static $rules = [
		'nombre_sede' => 'required',
		'encargadosede' => 'required',
    'ubicacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_sede','encargadosede','ubicacion'];



}
