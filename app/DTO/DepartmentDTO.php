<?php

namespace App\DTO;

class DepartmentDTO
{
    public $id;
    public $name;

    public function fromRequest($request)
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
