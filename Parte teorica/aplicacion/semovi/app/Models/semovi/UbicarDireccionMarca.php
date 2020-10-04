<?php

namespace App\Models\semovi;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UbicarDireccionMarca
 * @package App\Models\semovi
 * @version September 17, 2020, 12:36 am UTC
 *
 * @property \App\Models\Direccion $idDireccion
 * @property \App\Models\Marca $idMarca
 * @property integer $id_direccion
 * @property integer $id_marca
 */
class UbicarDireccionMarca extends Model
{


    public $table = 'ubicar_direccion_marca';
    public $timestamps = false;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $connection = "pgsql";
    protected $primaryKey = 'id';

    public $fillable = [
        'id',
        'id_direccion',
        'id_marca'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'=>'integer',
        'id_direccion' => 'integer',
        'id_marca' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id'=>'required|integer',
        'id_direccion' => 'nullable|integer',
        'id_marca' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idDireccion()
    {
        return $this->belongsTo(\App\Models\semovi\Direccion::class, 'id_direccion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idMarca()
    {
        return $this->belongsTo(\App\Models\semovi\Marca::class, 'id_marca');
    }
}
