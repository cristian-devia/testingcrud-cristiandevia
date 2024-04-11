<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Repar
 *
 * @property $id
 * @property $descripciondediagnostico
 * @property $fechadereporte
 * @property $serial
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Repar extends Model
{
    
    static $rules = [
		'descripciondediagnostico' => 'required',
		'fechadereporte' => 'required',
		'serial' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripciondediagnostico','fechadereporte','serial'];



}
