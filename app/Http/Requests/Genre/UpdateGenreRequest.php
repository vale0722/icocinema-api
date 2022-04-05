<?php

namespace App\Http\Requests\Genre;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGenreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'name' => 'string|min:6'
        ];
    }
}
