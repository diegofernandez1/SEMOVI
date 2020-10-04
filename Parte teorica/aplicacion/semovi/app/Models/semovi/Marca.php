<?php

namespace App\Models\semovi;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Marca
 * @package App\Models\semovi
 * @version September 17, 2020, 12:35 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $direccions
 * @property \Illuminate\Database\Eloquent\Collection $modelos
 * @property string $nombre
 */
class Marca extends Model
{


    public $table = 'marca';
    public $timestamps = false;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $connection = "pgsql";
    protected $primaryKey = 'id';

    public $fillable = [
        'id',
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id'=>'required|integer',
        'nombre' => 'nullable|string|max:200'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function direccions()
    {
        return $this->belongsToMany(\App\Models\semovi\Direccion::class, 'ubicar_direccion_marca');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function modelos()
    {
        return $this->hasMany(\App\Models\semovi\Modelo::class, 'id_marca');
    }
}
