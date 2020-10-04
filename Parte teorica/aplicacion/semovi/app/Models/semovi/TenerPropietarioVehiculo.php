<?php

namespace App\Models\semovi;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TenerPropietarioVehiculo
 * @package App\Models\semovi
 * @version September 17, 2020, 12:40 am UTC
 *
 * @property \App\Models\Vehiculo $idVehiculo
 * @property \App\Models\Propietario $idPropietario
 * @property integer $id_propietario
 * @property integer $id_vehiculo
 * @property string $fecha_inicio
 * @property string $fecha_fin
 */
class TenerPropietarioVehiculo extends Model
{


    public $table = 'tener_propietario_vehiculo';
    public $timestamps = false;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $connection = "pgsql";
    protected $primaryKey = 'id';

    public $fillable = [
        'id',
        'id_propietario',
        'id_vehiculo',
        'fecha_inicio',
        'fecha_fin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'=>'integer',
        'id_propietario' => 'integer',
        'id_vehiculo' => 'integer',
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id'=>'required|integer',
        'id_propietario' => 'nullable|integer',
        'id_vehiculo' => 'nullable|integer',
        'fecha_inicio' => 'nullable',
        'fecha_fin' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idVehiculo()
    {
        return $this->belongsTo(\App\Models\semovi\Vehiculo::class, 'id_vehiculo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idPropietario()
    {
        return $this->belongsTo(\App\Models\semovi\Propietario::class, 'id_propietario');
    }
}
