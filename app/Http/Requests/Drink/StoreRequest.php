<?php

namespace App\Http\Requests\Drink;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:75'],
            'description' => ['required', 'string', 'max:500'],
            'price' => ['required', 'integer', 'min:0', 'max:10000000000'],
            'rating' => ['required', 'numeric', 'min:1', 'max:5', 'regex:/^\d+(\.\d{1,2})?$/'],
        ];
    }
}
