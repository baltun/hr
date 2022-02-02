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

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDepartments($departments)
    {
        foreach ($departments as $department) {
            $this->departments[] = $department;
        }
    }

    public function getDepartments()
    {
        return $this->departments;
    }


    public function setPhotoUrl($photoUrl)
    {
        $this->photoUrl = $photoUrl;
    }

    public function getPhotoUrl()
    {
        return $this->photoUrl;
    }
}
