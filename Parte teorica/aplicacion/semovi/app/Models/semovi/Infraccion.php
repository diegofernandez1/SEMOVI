<?php

namespace App\Models\semovi;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Infraccion
 * @package App\Models\semovi
 * @version September 17, 2020, 12:42 am UTC
 *
 * @property \App\Models\Articulo $numeroArticulo
 * @property \App\Models\AgenteTransito $numeroAgente
 * @property \App\Models\Propietario $idInfractor
 * @property integer $numero_articulo
 * @property integer $id_infractor
 * @property integer $numero_agente
 * @property number $importe
 * @property string $fecha
 * @property string $calle
 * @property string $calle_anterior
 * @property string $calle_siguiente
 * @property string $municipio
 */
class Infraccion extends Model
{


    public $table = 'infraccion';
    public $timestamps = false;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $connection = "pgsql";
    protected $primaryKey = 'numero_expediente';

    public $fillable = [
        'numero_expediente',
        'numero_articulo',
        'id_infractor',
        'id_vehiculo',
        'numero_agente',
        'importe',
        'fecha',
        'calle',
        'calle_anterior',
        'calle_siguiente',
        'municipio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'numero_expediente' => 'integer',
        'numero_articulo' => 'integer',
        'id_infractor' => 'integer',
        'id_vehiculo' => 'integer',
        'numero_agente' => 'integer',
        'importe' => 'decimal:2',
        'fecha' => 'date',
        'calle' => 'string',
        'calle_anterior' => 'string',
        'calle_siguiente' => 'string',
        'municipio' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numero_expediente' => 'required|integer',
        'numero_articulo' => 'nullable|integer',
        'id_infractor' => 'nullable|integer',
        'id_vehiculo' => 'nullable|integer',
        'numero_agente' => 'nullable|integer',
        'importe' => 'nullable|numeric',
        'fecha' => 'nullable',
        'calle' => 'nullable|string|max:150',
        'calle_anterior' => 'nullable|string|max:150',
        'calle_siguiente' => 'nullable|string|max:150',
        'municipio' => 'nullable|string|max:150'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function numeroArticulo()
    {
        return $this->belongsTo(\App\Models\semovi\Articulo::class, 'numero_articulo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function numeroAgente()
    {
        return $this->belongsTo(\App\Models\semovi\AgenteTransito::class, 'numero_agente');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idInfractor()
    {
        return $this->belongsTo(\App\Models\semovi\Propietario::class, 'id_infractor');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idVehiculo()
    {
        return $this->belongsTo(\App\Models\semovi\Vehiculo::class, 'id_vehiculo');
    }
}
