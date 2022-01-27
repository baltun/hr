<?php

namespace App\Interfaces;

use App\DTO\DepartmentDTO;

interface DepartmentRepositoryInterface
{
    public function create(DepartmentDTO $departmentDTO);
}
