<?php

namespace App\DataTransferObjects;

use App\Contracts\ModelDTO;
use App\Http\Requests\ModuleExamRequest;

class ModuleExamDTO implements ModelDTO
{
    /**
     * @param string $module_id
     * @param string $is_autochecked
     * @param string $name
     */
    public function __construct(
        public readonly string $module_id,
        public readonly string $is_autochecked,
        public readonly string $name,
    )
    {
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'module_id' => $this->module_id,
            'is_autochecked' => $this->is_autochecked,
            'name' => $this->name,
        ];
    }
}
