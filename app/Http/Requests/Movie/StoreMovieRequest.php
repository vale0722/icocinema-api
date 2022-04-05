<?php

namespace App\Http\Requests\Movie;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'string|min:6|required',
            'description' => 'string|min:20|required',
            'min_age' => 'string|required',
            'duration' => 'string|required|min:2',
            'release_date' => 'required'
        ];
    }
}
