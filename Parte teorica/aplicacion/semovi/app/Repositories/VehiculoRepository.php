<?php

namespace App\Repositories;

use App\Models\Vehiculo;
use App\Repositories\BaseRepository;

/**
 * Class VehiculoRepository
 * @package App\Repositories
 * @version September 17, 2020, 12:38 am UTC
*/

class VehiculoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_motor',
        'id_modelo',
        'numero_tarjeta_circulacion',
        'numero_serie',
        'numero_placa',
        'capacidad_tanque',
        'num_pasajeros',
        'fecha_caducidad_tarjeta_circulacion',
        'fecha_emplacado'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Vehiculo::class;
    }
}
