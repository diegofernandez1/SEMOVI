<?php

namespace App\Models\semovi;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Vehiculo
 * @package App\Models\semovi
 * @version September 17, 2020, 12:38 am UTC
 *
 * @property \App\Models\Modelo $idModelo
 * @property \App\Models\Motor $idMotor
 * @property \Illuminate\Database\Eloquent\Collection $propietarios
 * @property integer $id_motor
 * @property integer $id_modelo
 * @property string $numero_tarjeta_circulacion
 * @property string $numero_serie
 * @property string $numero_placa
 * @property integer $capacidad_tanque
 * @property integer $num_pasajeros
 * @property string $fecha_caducidad_tarjeta_circulacion
 * @property string $fecha_emplacado
 */
class Vehiculo extends Model
{


    public $table = 'vehiculo';
    public $timestamps = false;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $connection = "pgsql";
    protected $primaryKey = 'id';

    public $fillable = [
        'id',
        'id_motor',
        'id_modelo',
        'numero_tarjeta_circulacion',
        'numero_serie',
        'numero_placa',
        'capacidad_tanque',
        'num_pasajeros',
        'fecha_caducidad_tarjeta_circulacion',
        'fecha_emplacado',
        'tipo_transmision'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_motor' => 'integer',
        'id_modelo' => 'integer',
        'numero_tarjeta_circulacion' => 'string',
        'numero_serie' => 'string',
        'numero_placa' => 'string',
        'capacidad_tanque' => 'integer',
        'num_pasajeros' => 'integer',
        'fecha_caducidad_tarjeta_circulacion' => 'date',
        'fecha_emplacado' => 'date',
        'tipo_transmision'=> 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id'=>'required|integer',
        'id_motor' => 'nullable|integer',
        'id_modelo' => 'nullable|integer',
        'numero_tarjeta_circulacion' => 'nullable|string|max:8',
        'numero_serie' => 'nullable|string|max:17',
        'numero_placa' => 'nullable|string|max:7',
        'capacidad_tanque' => 'nullable|integer',
        'num_pasajeros' => 'nullable|integer',
        'fecha_caducidad_tarjeta_circulacion' => 'nullable',
        'fecha_emplacado' => 'nullable',
        'tipo_transmision'=> 'nullable|string|max:10'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idModelo()
    {
        return $this->belongsTo(\App\Models\semovi\Modelo::class, 'id_modelo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idMotor()
    {
        return $this->belongsTo(\App\Models\semovi\Motor::class, 'id_motor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function propietarios()
    {
        return $this->belongsToMany(\App\Models\semovi\Propietario::class, 'tener_propietario_vehiculo');
    }
}
