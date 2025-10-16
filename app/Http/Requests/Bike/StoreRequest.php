<?php

namespace App\Http\Requests\Bike;

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
            'brand' => ['required', 'string', 'max:50'],
            'type' => ['required', 'string', 'max:50'],
            'color' => ['required', 'string', 'max:30'],
            'price' => ['required', 'integer', 'min:0', 'max:1000000000'],
            'availability' => ['required', 'boolean'],
        ];
    }
}
