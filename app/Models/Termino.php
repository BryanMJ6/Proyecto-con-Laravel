<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Termino
 *
 * @property $id
 * @property $Informacion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Termino extends Model
{
    
    static $rules = [
		'Informacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Informacion'];



}
