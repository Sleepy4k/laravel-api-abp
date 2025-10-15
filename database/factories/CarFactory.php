<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
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
                'brand' => 'Toyota',
                'model' => 'Innova Reborn',
                'production_year' => 2021,
                'fuel_type' => 'Diesel',
                'color' => 'Putih',
                'price' => 385000000,
                'availability' => true
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'Honda',
                'model' => 'CR-V',
                'production_year' => 2023,
                'fuel_type' => 'Bensin',
                'color' => 'Merah',
                'price' => 610000000,
                'availability' => true
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'Mitsubishi',
                'model' => 'Xpander',
                'production_year' => 2020,
                'fuel_type' => 'Bensin',
                'color' => 'Hitam',
                'price' => 255000000,
                'availability' => true
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'Suzuki',
                'model' => 'Jimny',
                'production_year' => 2022,
                'fuel_type' => 'Bensin',
                'color' => 'Hijau Army',
                'price' => 450000000,
                'availability' => false
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'Hyundai',
                'model' => 'Ioniq 5',
                'production_year' => 2024,
                'fuel_type' => 'Listrik',
                'color' => 'Abu-abu Metalik',
                'price' => 780000000,
                'availability' => true
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'BMW',
                'model' => 'X5',
                'production_year' => 2019,
                'fuel_type' => 'Bensin',
                'color' => 'Biru Tua',
                'price' => 1200000000,
                'availability' => false
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'Daihatsu',
                'model' => 'Ayla',
                'production_year' => 2023,
                'fuel_type' => 'Bensin',
                'color' => 'Kuning',
                'price' => 175000000,
                'availability' => true
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'Wuling',
                'model' => 'Air EV',
                'production_year' => 2022,
                'fuel_type' => 'Listrik',
                'color' => 'Pink Pastel',
                'price' => 220000000,
                'availability' => true
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'Mercedes-Benz',
                'model' => 'C-Class',
                'production_year' => 2020,
                'fuel_type' => 'Bensin',
                'color' => 'Hitam Solid',
                'price' => 950000000,
                'availability' => true
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'Isuzu',
                'model' => 'Panther',
                'production_year' => 2005,
                'fuel_type' => 'Diesel',
                'color' => 'Coklat',
                'price' => 95000000,
                'availability' => false
            ]
        ];
    }
}
