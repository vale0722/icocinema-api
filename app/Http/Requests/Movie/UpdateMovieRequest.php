<?php

namespace App\Http\Requests\Movie;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'string|min:6',
            'description' => 'string|min:20',
            'min_age' => 'string',
            'duration' => 'string|min:2',
        ];
    }
}
