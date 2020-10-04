<?php

namespace App\Repositories;

use App\Models\Modelo;
use App\Repositories\BaseRepository;

/**
 * Class ModeloRepository
 * @package App\Repositories
 * @version September 17, 2020, 12:37 am UTC
*/

class ModeloRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_marca',
        'nombre_modelo'
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
        return Modelo::class;
    }
}
