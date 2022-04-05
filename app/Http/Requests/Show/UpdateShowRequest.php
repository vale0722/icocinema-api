<?php

namespace App\Http\Requests\Show;

use Illuminate\Foundation\Http\FormRequest;

class UpdateShowRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'show_date' => 'required|date',
            'show_hour' => 'min:5|required|string',
            'room_id' => 'required',
            'movie_id' => 'required',
        ];
    }
}
