<?php

namespace App\Http\Requests\Chair;

use Illuminate\Foundation\Http\FormRequest;

class StoreChairRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => 'required',
            'show_id' => 'required',
        ];
    }
}
