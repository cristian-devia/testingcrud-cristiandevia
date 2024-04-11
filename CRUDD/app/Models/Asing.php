<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asing
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asing extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
    'estado' => 'required',
    'fecha_de_prestamo' => 'required',
    'fecha_de_entrega' => 'required',
    'serial' => 'required',
    'nombre' => 'required',
    'apellido' => 'required',
    'cargo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','estado','fecha_de_prestamo','fecha_de_entrega','serial','nombre','apellido','cargo'];



}
