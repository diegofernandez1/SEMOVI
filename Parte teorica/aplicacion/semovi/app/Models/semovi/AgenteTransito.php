<?php

namespace App\Models\semovi;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AgenteTransito\semovi
 * @package App\Models
 * @version September 17, 2020, 12:39 am UTC
 *
 * @property \App\Models\Persona $idPersona
 * @property \Illuminate\Database\Eloquent\Collection $infraccions
 * @property integer $id_persona
 */
class AgenteTransito extends Model
{


    public $table = 'agente_transito';
    public $timestamps = false;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $connection = "pgsql";
    protected $primaryKey = 'numero_agente';

    public $fillable = [
        'numero_agente',
        'id_persona'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'numero_agente' => 'integer',
        'id_persona' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numero_agente'=>'required|integer',
        'id_persona' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idPersona()
    {
        return $this->belongsTo(\App\Models\semovi\Persona::class, 'id_persona');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function infracciones()
    {
        return $this->hasMany(\App\Models\semovi\Infraccion::class, 'numero_agente');
    }
}
