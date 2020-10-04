<?php

namespace App\Models\semovi;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Motor
 * @package App\Models\semovi
 * @version September 17, 2020, 12:37 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $vehiculos
 * @property integer $cilindraje
 * @property number $litros_motor
 */
class Motor extends Model
{


    public $table = 'motor';
    public $timestamps = false;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $connection = "pgsql";
    protected $primaryKey = 'id';

    public $fillable = [
        'id',
        'cilindraje',
        'litros_motor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cilindraje' => 'integer',
        'litros_motor' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id'=>'required|integer',
        'cilindraje' => 'nullable|integer',
        'litros_motor' => 'nullable|numeric'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vehiculos()
    {
        return $this->hasMany(\App\Models\semovi\Vehiculo::class, 'id_motor');
    }
}
