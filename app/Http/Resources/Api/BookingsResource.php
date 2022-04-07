<?php

namespace App\Http\Resources\Api;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingsResource extends JsonResource
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
            'user' => $this->user->name,
            'room' => $this->show->room->number,
            'movie' => $this->show->movie->name,
            'quantity' => $this->quantity,
            'value' => $this->value,
            'show_day' => (new Carbon($this->show->show_day))
                    ->format('Y-m-d') . ' ' . $this->show->show_hour
        ];
    }
}
