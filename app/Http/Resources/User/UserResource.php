<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // tentuin manual :
        // return [
        //     'id' => $this->id,
        //     'name' => $this->name,
        // ];

        // otmatis tampilin semua data
        return parent::toArray($request);
    }
}
