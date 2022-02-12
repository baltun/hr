<?php

namespace Tests\Unit;

use App\Interfaces\RepositoryInterfaces\DepartmentRepositoryInterface;
use PHPUnit\Framework\TestCase;

class DepartmentServiceTest extends TestCase
{
    public function testCreateSuccess()
    {
        $departmentService = new \App\Services\DepartmentService();

    }
}
