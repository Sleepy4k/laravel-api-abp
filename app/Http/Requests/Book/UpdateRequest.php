<?php

namespace App\Http\Requests\Book;

use App\Models\Book;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'author' => ['sometimes', 'string', 'max:100'],
            'published_year' => ['sometimes', 'integer', 'min:0', 'max:' . (date('Y') + 1)],
            'genre' => ['sometimes', 'string', 'max:50'],
            'isbn' => ['sometimes', 'string', 'max:20', Rule::unique(Book::class, 'isbn')],
        ];
    }
}
