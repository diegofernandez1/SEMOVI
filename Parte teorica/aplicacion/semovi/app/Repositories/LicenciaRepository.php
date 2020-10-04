<?php

namespace App\Repositories;

use App\Models\Licencia;
use App\Repositories\BaseRepository;

/**
 * Class LicenciaRepository
 * @package App\Repositories
 * @version September 17, 2020, 12:39 am UTC
*/

class LicenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numero',
        'id_propietario',
        'tipo',
        'fecha_caducidad'
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
        return Licencia::class;
    }
}
