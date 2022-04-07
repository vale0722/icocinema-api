<?php

namespace App\Http\Resources\Api;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;

class MoviesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->genre->name,
            'duration' => $this->duration,
            'description' => $this->description,
            'image' => $this->image,
            'min_age' => $this->min_age,
            'thriller' => $this->thriller,
            'release_date' => $this->release_date,
            'genre_id' => $this->genre_id,
            'shows' => ShowsResource::collection($this->shows()->where('show_day', '>=', now()->subDay())->get()),
            'createdAt' => $this->created_at->format('Y-m-d h:m:s'),
            'updatedAt' => $this->updated_at->format('Y-m-d h:m:s'),
        ];
    }
}
