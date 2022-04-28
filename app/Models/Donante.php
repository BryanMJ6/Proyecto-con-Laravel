<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Donante
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $direccion
 * @property $telefono
 * @property $donante
 * @property $sexo
 * @property $tipo_sangre
 * @property $dui
 * @property $padecimiento
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Donante extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'donante' => 'required',
		'sexo' => 'required',
		'tipo_sangre' => 'required',
		'dui' => 'required',
		'padecimiento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','direccion','telefono','donante','sexo','tipo_sangre','dui','padecimiento'];



}
