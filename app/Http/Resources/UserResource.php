<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'role' => $this->is_admin ? 'admin' : 'user',
            'created_at' => $this->created_at->format('M d, Y'),
            'photos_uploaded' => 10
        ];
    }
}
