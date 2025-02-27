<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentsClassResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'course_id' => $this->course_id,
            'curator_id' => $this->curator_id,
            'student_ids' => $this->student_ids,
            'user_role_id' => $this->user_role_id,
        ];
    }
}
