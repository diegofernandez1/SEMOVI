<?php

namespace App\Repositories;

use App\Models\Motor;
use App\Repositories\BaseRepository;

/**
 * Class MotorRepository
 * @package App\Repositories
 * @version September 17, 2020, 12:37 am UTC
*/

class MotorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cilindraje',
        'litros_motor'
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
        return Motor::class;
    }
}
