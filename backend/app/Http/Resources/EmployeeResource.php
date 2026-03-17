<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    public function toArray($request): array
    {
        $tenureYears = $this->joining_date->diffInYears(now());

        return [
            'id'           => $this->id,
            'name'         => $this->name,
            'email'        => $this->email,
            'joining_date' => $this->joining_date->toDateString(),
            'is_active'    => $this->is_active,
            'is_eligible'  => $this->is_active && $tenureYears >= 5,
        ];
    }
}
