<?php

namespace App\Services;

use App\DTO\DepartmentDTO;
use App\Entities\Department;
use App\Interfaces\DepartmentRepositoryInterface;
use App\Interfaces\DepartmentServiceInterface;

class DepartmentService implements DepartmentServiceInterface
{
    public $departmentRepository;

    public function __construct(DepartmentRepositoryInterface $departmentRepository)
    {
        $this->departmentRepository = $departmentRepository;
    }

    public function create(DepartmentDTO $departmentDTO)
    {

        $department = $this->departmentRepository->create($departmentDTO);

        return $department;
    }

    public function getById(int $id)
    {

    }

    public function edit(DepartmentDTO $departmentDTO)
    {

    }

    public function removeById(int $id)
    {

    }
}
