<?php

namespace App\Http\Requests\Food;

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
            'name' => ['sometimes', 'string', 'max:75'],
            'description' => ['sometimes', 'string', 'max:500'],
            'price' => ['sometimes', 'integer', 'min:0', 'max:10000000000'],
            'rating' => ['sometimes', 'numeric', 'min:1', 'max:5', 'regex:/^\d+(\.\d{1,2})?$/'],
        ];
    }
}
