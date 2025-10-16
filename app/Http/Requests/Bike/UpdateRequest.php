<?php

namespace App\Http\Requests\Bike;

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
            'brand' => ['sometimes', 'string', 'max:50'],
            'type' => ['sometimes', 'string', 'max:50'],
            'color' => ['sometimes', 'string', 'max:30'],
            'price' => ['sometimes', 'integer', 'min:0', 'max:1000000000'],
            'availability' => ['sometimes', 'boolean'],
        ];
    }
}
