<?php

namespace App\Repositories;

use App\Models\UbicarDireccionMarca;
use App\Repositories\BaseRepository;

/**
 * Class UbicarDireccionMarcaRepository
 * @package App\Repositories
 * @version September 17, 2020, 12:36 am UTC
*/

class UbicarDireccionMarcaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_direccion',
        'id_marca'
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
        return UbicarDireccionMarca::class;
    }
}
