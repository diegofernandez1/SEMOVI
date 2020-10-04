<?php

namespace App\Models\semovi;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Propietario
 * @package App\Models\semovi
 * @version September 17, 2020, 12:39 am UTC
 *
 * @property \App\Models\Persona $idPersona
 * @property \App\Models\Direccion $idDireccion
 * @property \Illuminate\Database\Eloquent\Collection $licencia
 * @property \Illuminate\Database\Eloquent\Collection $vehiculos
 * @property \Illuminate\Database\Eloquent\Collection $infraccions
 * @property string $rfc
 * @property integer $id_direccion
 * @property integer $id_persona
 * @property string $fecha_nacimiento
 */
class Propietario extends Model
{


    public $table = 'propietario';
    public $timestamps = false;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $connection = "pgsql";
    protected $primaryKey = 'id';

    public $fillable = [
        'id',
        'rfc',
        'id_direccion',
        'id_persona',
        'fecha_nacimiento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rfc' => 'string',
        'id_direccion' => 'integer',
        'id_persona' => 'integer',
        'fecha_nacimiento' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id'=>'required|integer',
        'rfc' => 'nullable|string|max:13',
        'id_direccion' => 'nullable|integer',
        'id_persona' => 'nullable|integer',
        'fecha_nacimiento' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idPersona()
    {
        return $this->belongsTo(\App\Models\semovi\Persona::class, 'id_persona');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idDireccion()
    {
        return $this->belongsTo(\App\Models\semovi\Direccion::class, 'id_direccion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function licencia()
    {
        return $this->hasMany(\App\Models\semovi\Licencia::class, 'id_propietario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function vehiculos()
    {
        return $this->belongsToMany(\App\Models\Vehiculo::class, 'tener_propietario_vehiculo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function infraccions()
    {
        return $this->hasMany(\App\Models\Infraccion::class, 'id_infractor');
    }
}
