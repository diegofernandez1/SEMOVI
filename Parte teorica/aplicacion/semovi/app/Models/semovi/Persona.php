<?php

namespace App\Models\semovi;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Persona
 * @package App\Models\semovi
 * @version September 17, 2020, 12:38 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $agenteTransitos
 * @property \Illuminate\Database\Eloquent\Collection $propietarios
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $nombre
 */
class Persona extends Model
{


    public $table = 'persona';
    public $timestamps = false;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $connection = "pgsql";
    protected $primaryKey = 'id';

    public $fillable = [
        'id',
        'apellido_paterno',
        'apellido_materno',
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id'=>'required|integer',
        'apellido_paterno' => 'nullable|string|max:200',
        'apellido_materno' => 'nullable|string|max:200',
        'nombre' => 'nullable|string|max:200'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function agenteTransitos()
    {
        return $this->hasMany(\App\Models\semovi\AgenteTransito::class, 'id_persona');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function propietarios()
    {
        return $this->hasMany(\App\Models\semovi\Propietario::class, 'id_persona');
    }
}
