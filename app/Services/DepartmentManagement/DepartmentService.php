<?php
declare(strict_types = 1);

namespace App\Services\DepartmentManagement;

use App\DTO\DepartmentDTO;
use App\Entities\Department;
use App\Interfaces\RepositoryInterfaces\DepartmentRepositoryInterface;
use App\Interfaces\DepartmentServiceInterface;
use App\Repositories\DepartmentRepository;

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

        return $department->id;
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

    public function getNames()
    {
        $departmentNames = $this->departmentRepository->allNames();

        return $departmentNames;
    }
}
