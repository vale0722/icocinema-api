<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class ShowsResource extends JsonResource
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
            'show_day' => $this->show_day,
            'show_hour' => $this->show_hour,
            'room_id' => $this->room_id,
            'movie_id' => $this->movie_id,
        ];
    }
}
