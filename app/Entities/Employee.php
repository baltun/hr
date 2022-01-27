<?php
declare(strict_types = 1);

namespace App\Entities;

class Employee
{
    private $id;
    private $name;
    private $departments;
    private $photoUrl;

    public function __construct(int $id, Name $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function addDepartments($departments)
    {
        foreach ($departments as $department) {
            $this->departments[] = $department;
        }
    }

    public function removeDepartment($departments)
    {
        foreach ($departments as $department) {
            $this->departments[] = $department;
        }
    }

    public function editName($name)
    {
        $this->name = $name;
    }

    public function setPhotoUrl($photoUrl)
    {
        $this->photoUrl = $photoUrl;
    }
}
