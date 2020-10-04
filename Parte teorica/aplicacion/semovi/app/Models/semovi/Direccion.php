<?php

namespace App\Models\semovi;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Direccion
 * @package App\Models\semovi
 * @version September 17, 2020, 12:34 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $marcas
 * @property \Illuminate\Database\Eloquent\Collection $propietarios
 * @property string $calle
 * @property integer $num_int
 * @property integer $num_ext
 * @property string $asentamiento
 * @property string $municipio
 * @property string $estado
 * @property string $codigo_postal
 */
class Direccion extends Model
{


    public $table = 'direccion';
    public $timestamps = false;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $connection = "pgsql";
    protected $primaryKey = 'id';

    public $fillable = [
        'id',
        'calle',
        'num_int',
        'num_ext',
        'asentamiento',
        'municipio',
        'estado',
        'codigo_postal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'calle' => 'string',
        'num_int' => 'integer',
        'num_ext' => 'integer',
        'asentamiento' => 'string',
        'municipio' => 'string',
        'estado' => 'string',
        'codigo_postal' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id'=>'required|integer',
        'calle' => 'nullable|string|max:200',
        'num_int' => 'nullable|integer',
        'num_ext' => 'nullable|integer',
        'asentamiento' => 'nullable|string|max:200',
        'municipio' => 'nullable|string|max:150',
        'estado' => 'nullable|string|max:100',
        'codigo_postal' => 'nullable|string|max:20'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function marcas()
    {
        return $this->belongsToMany(\App\Models\semovi\Marca::class, 'ubicar_direccion_marca');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function propietarios()
    {
        return $this->hasMany(\App\Models\semovi\Propietario::class, 'id_direccion');
    }
}
