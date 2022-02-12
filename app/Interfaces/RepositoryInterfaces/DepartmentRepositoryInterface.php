<?php

namespace App\Interfaces\RepositoryInterfaces;

use App\DTO\DepartmentDTO;

interface DepartmentRepositoryInterface
{
    public function create(DepartmentDTO $departmentDTO);
}
