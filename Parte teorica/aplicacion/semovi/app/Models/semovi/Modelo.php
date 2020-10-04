<?php

namespace App\Models\semovi;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Modelo
 * @package App\Models\semovi
 * @version September 17, 2020, 12:37 am UTC
 *
 * @property \App\Models\Marca $idMarca
 * @property \Illuminate\Database\Eloquent\Collection $vehiculos
 * @property integer $id_marca
 * @property string $nombre_modelo
 */
class Modelo extends Model
{


    public $table = 'modelo';
    public $timestamps = false;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $connection = "pgsql";
    protected $primaryKey = 'id';

    public $fillable = [
        'id',
        'id_marca',
        'nombre_modelo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_marca' => 'integer',
        'nombre_modelo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id'=>'required|integer',
        'id_marca' => 'nullable|integer',
        'nombre_modelo' => 'nullable|string|max:200'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idMarca()
    {
        return $this->belongsTo(\App\Models\semovi\Marca::class, 'id_marca');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vehiculos()
    {
        return $this->hasMany(\App\Models\semovi\Vehiculo::class, 'id_modelo');
    }
}
