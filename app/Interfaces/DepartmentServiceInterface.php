<?php

namespace App\Interfaces;

use App\DTO\DepartmentDTO;

interface DepartmentServiceInterface
{
    public function create(DepartmentDTO $departmentDTO);

    public function edit(DepartmentDTO $departmentDTO);

    public function removeById(int $id);
}
