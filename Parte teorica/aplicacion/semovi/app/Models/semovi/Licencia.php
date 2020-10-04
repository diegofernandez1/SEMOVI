<?php

namespace App\Models\semovi;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Licencia
 * @package App\Models\semovi
 * @version September 17, 2020, 12:39 am UTC
 *
 * @property \App\Models\Propietario $idPropietario
 * @property string $numero
 * @property integer $id_propietario
 * @property string $tipo
 * @property string $fecha_caducidad
 */
class Licencia extends Model
{


    public $table = 'licencia';
    public $timestamps = false;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $connection = "pgsql";
    protected $primaryKey = 'id';

    public $fillable = [
        'id',
        'numero',
        'id_propietario',
        'tipo',
        'fecha_caducidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'numero' => 'string',
        'id_propietario' => 'integer',
        'tipo' => 'string',
        'fecha_caducidad' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id'=>'required|integer',
        'numero' => 'nullable|string|max:8',
        'id_propietario' => 'nullable|integer',
        'tipo' => 'nullable|string|max:1',
        'fecha_caducidad' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idPropietario()
    {
        return $this->belongsTo(\App\Models\semovi\Propietario::class, 'id_propietario');
    }
}
