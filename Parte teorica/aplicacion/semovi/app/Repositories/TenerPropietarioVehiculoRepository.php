<?php

namespace App\Repositories;

use App\Models\TenerPropietarioVehiculo;
use App\Repositories\BaseRepository;

/**
 * Class TenerPropietarioVehiculoRepository
 * @package App\Repositories
 * @version September 17, 2020, 12:40 am UTC
*/

class TenerPropietarioVehiculoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_propietario',
        'id_vehiculo',
        'fecha_inicio',
        'fecha_fin'
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
        return TenerPropietarioVehiculo::class;
    }
}
