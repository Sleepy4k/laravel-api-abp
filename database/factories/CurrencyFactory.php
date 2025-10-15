<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Currency>
 */
class CurrencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'United States Dollar',
                'code' => 'USD',
                'symbol' => '$'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Euro',
                'code' => 'EUR',
                'symbol' => '€'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Japanese Yen',
                'code' => 'JPY',
                'symbol' => '¥'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'British Pound Sterling',
                'code' => 'GBP',
                'symbol' => '£'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Australian Dollar',
                'code' => 'AUD',
                'symbol' => 'A$'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Canadian Dollar',
                'code' => 'CAD',
                'symbol' => 'C$'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Swiss Franc',
                'code' => 'CHF',
                'symbol' => 'CHF'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Chinese Yuan Renminbi',
                'code' => 'CNY',
                'symbol' => '¥'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Singapore Dollar',
                'code' => 'SGD',
                'symbol' => 'S$'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Indonesian Rupiah',
                'code' => 'IDR',
                'symbol' => 'Rp'
            ]
        ];
    }
}
