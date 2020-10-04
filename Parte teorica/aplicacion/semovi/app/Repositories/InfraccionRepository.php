<?php

namespace App\Repositories;

use App\Models\Infraccion;
use App\Repositories\BaseRepository;

/**
 * Class InfraccionRepository
 * @package App\Repositories
 * @version September 17, 2020, 12:42 am UTC
*/

class InfraccionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numero_articulo',
        'id_infractor',
        'numero_agente',
        'importe',
        'fecha',
        'calle',
        'calle_anterior',
        'calle_siguiente',
        'municipio'
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
        return Infraccion::class;
    }
}
