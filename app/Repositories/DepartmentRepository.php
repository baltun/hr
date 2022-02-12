<?php

namespace App\Repositories;

use App\Interfaces\RepositoryInterfaces\DepartmentRepositoryInterface;
use App\Models\Department;
use App\Repositories\BaseRepository;

/**
 * Class DepartmentRepository
 * @package App\Repositories
 * @version February 4, 2022, 10:52 am UTC
*/

class DepartmentRepository extends BaseRepository implements DepartmentRepositoryInterface
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Department::class;
    }
}
