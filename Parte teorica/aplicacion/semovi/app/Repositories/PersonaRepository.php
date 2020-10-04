<?php

namespace App\Repositories;

use App\Models\Persona;
use App\Repositories\BaseRepository;

/**
 * Class PersonaRepository
 * @package App\Repositories
 * @version September 17, 2020, 12:38 am UTC
*/

class PersonaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'apellido_paterno',
        'apellido_materno',
        'nombre'
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
        return Persona::class;
    }
}
