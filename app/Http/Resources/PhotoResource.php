<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhotoResource extends JsonResource
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
            'path' => $this->path,
            'category_id' => $this->category_id,
            'user' => $this->user ? $this->user->name : 'No User'
        ];
    }
}
