<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Garant
 *
 * @property $id
 * @property $descriptions
 * @property $price
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Garant extends Model
{
    
    static $rules = [
      'descripcion' => 'required',
      'fechareporte' => 'required|date',
      'fechaatenciongarantia' => 'required|date',
      'numeroordenn' => 'required',
      'proveedor' => 'required',
      'nombreelemento' => 'required',
      'serial' => 'required',
  ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','fechareporte','fechaatenciongarantia','numeroordenn','proveedor','nombreelemento','serial'];



}
