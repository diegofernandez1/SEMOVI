<?php

namespace App\Repositories;

use App\Models\Articulo;
use App\Repositories\BaseRepository;

/**
 * Class ArticuloRepository
 * @package App\Repositories
 * @version September 17, 2020, 12:41 am UTC
*/

class ArticuloRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
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
        return Articulo::class;
    }
}
