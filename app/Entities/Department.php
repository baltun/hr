<?php
declare(strict_types = 1);

namespace App\Entities;

class Department
{
    private $id;
    public $name;

    public function __construct(string $name)
    {
        if (!$name) {
            throw new \Exception('Creation of department fails - empty name', 110);
        }
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
}
