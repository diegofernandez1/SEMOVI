<?php

namespace App\Repositories;

use App\Models\Propietario;
use App\Repositories\BaseRepository;

/**
 * Class PropietarioRepository
 * @package App\Repositories
 * @version September 17, 2020, 12:39 am UTC
*/

class PropietarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rfc',
        'id_direccion',
        'id_persona',
        'fecha_nacimiento'
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
        return Propietario::class;
    }
}
