<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'meta_title' => $this->meta_title,
            'description' => $this->description,
            'content' => $this->content,
            'status' => $this->status,
            'created _at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/y'),    
        ];
    }
}
