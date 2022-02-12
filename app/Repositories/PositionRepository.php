<?php

namespace App\Repositories;

use App\Interfaces\RepositoryInterfaces\PositionRepositoryInterface;
use App\Models\Position;
use App\Repositories\BaseRepository;

/**
 * Class PositionRepository
 * @package App\Repositories
 * @version February 4, 2022, 3:13 pm UTC
*/

class PositionRepository extends BaseRepository implements PositionRepositoryInterface
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
        return Position::class;
    }
}
