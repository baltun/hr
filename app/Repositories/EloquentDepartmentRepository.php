<?php

namespace App\Repositories;

use App\DTO\DepartmentDTO;
use App\Entities\Department;
use App\Interfaces\DepartmentRepositoryInterface;
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
        dd($departmentModel->id);
        return $departmentModel->id;
    }

    public function findById()
    {

    }

    public function change()
    {

    }
}