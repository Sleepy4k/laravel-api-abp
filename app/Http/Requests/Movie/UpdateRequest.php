<?php

namespace App\Http\Requests\Movie;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['sometimes', 'string', 'max:150'],
            'description' => ['sometimes', 'string', 'max:500'],
            'release_year' => ['sometimes', 'integer', 'min:0', 'max:' . (date('Y') + 1)],
            'genre' => ['sometimes', 'string', 'max:50'],
            'director' => ['sometimes', 'string', 'max:100'],
        ];
    }
}
