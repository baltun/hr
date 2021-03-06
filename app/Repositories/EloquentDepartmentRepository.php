<?php
declare(strict_types = 1);

namespace App\Repositories;

use App\DTO\DepartmentDTO;
use App\Entities\Department;
use App\Interfaces\RepositoryInterfaces\DepartmentRepositoryInterface;
use App\Models\DepartmentModel;

class EloquentDepartmentRepository implements DepartmentRepositoryInterface
{
    public function __construct()
    {

    }

    public function create(DepartmentDTO $departmentDTO)
    {
        $departmentModel = new DepartmentModel();

        $departmentModel->name = $departmentDTO->name;

        $departmentModel->save();

        $departmentDTO->id = $departmentModel->id;

        return $departmentDTO;
    }

    public function findById()
    {

    }

    public function change()
    {

    }

}
