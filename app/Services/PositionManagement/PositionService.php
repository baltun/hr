<?php

namespace App\Services\PositionManagement;

use App\Interfaces\RepositoryInterfaces\PositionRepositoryInterface;
use App\Interfaces\PositionServiceInterface;
use App\Interfaces\RepositoryInterfaces\DepartmentRepositoryInterface;

class PositionService implements PositionServiceInterface
{
    public $positionRepository;

    public function __construct(PositionRepositoryInterface $positionRepository)
    {
        $this->positionRepository = $positionRepository;
    }


    public function create(){

    }

    public function edit(){

    }

    public function remove(){

    }

    public function getNames()
    {
        $positionNames = $this->positionRepository->allNames();

        return $positionNames;
    }
}
