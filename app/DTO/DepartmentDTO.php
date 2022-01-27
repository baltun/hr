<?php
declare(strict_types = 1);

namespace App\DTO;

class DepartmentDTO
{
    public $id;
    public $name;

    public static function fromRequest($request)
    {
        $dto = new self();
        foreach ($dto as $name => $value) {
            if (isset($request->$name)) {
                $dto->$name = $request->$name;
            }
        }

        return $dto;
    }
}
