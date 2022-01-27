<?php
declare(strict_types = 1);

namespace App\Entities;

class Name
{
    public $firstName;
    public $lastName;
    public $middleName;

    public function __construct(string $lastName, string $firstName, ?string $middleName = '')
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
    }

}
