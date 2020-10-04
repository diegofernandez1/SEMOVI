<?php

namespace App\Models\semovi;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Articulo
 * @package App\Models\semovi
 * @version September 17, 2020, 12:41 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $infraccions
 * @property string $descripcion
 */
class Articulo extends Model
{


    public $table = 'articulo';
    public $timestamps = false;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $connection = "pgsql";
    protected $primaryKey = 'numero';

    public $fillable = [
        'numero',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'numero' => 'integer',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numero'=>'required|integer',
        'descripcion' => 'nullable|string'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function infracciones()
    {
        return $this->hasMany(\App\Models\semovi\Infraccion::class, 'numero_articulo');
    }
}
