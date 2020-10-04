<?php

namespace App\Repositories;

use App\Models\AgenteTransito;
use App\Repositories\BaseRepository;

/**
 * Class AgenteTransitoRepository
 * @package App\Repositories
 * @version September 17, 2020, 12:39 am UTC
*/

class AgenteTransitoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_persona'
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
        return AgenteTransito::class;
    }
}
