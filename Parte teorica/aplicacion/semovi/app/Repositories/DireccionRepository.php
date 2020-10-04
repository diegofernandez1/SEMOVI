<?php

namespace App\Repositories;

use App\Models\Direccion;
use App\Repositories\BaseRepository;

/**
 * Class DireccionRepository
 * @package App\Repositories
 * @version September 17, 2020, 12:34 am UTC
*/

class DireccionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'calle',
        'num_int',
        'num_ext',
        'asentamiento',
        'municipio',
        'estado',
        'codigo_postal'
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
        return Direccion::class;
    }
}
