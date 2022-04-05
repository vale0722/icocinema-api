<?php

namespace App\Http\Requests\Room;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoomRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'number' => 'required',
            'chairs' => 'required',
        ];
    }
}
