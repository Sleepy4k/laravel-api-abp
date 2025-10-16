<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bike>
 */
class BikeFactory extends Factory
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
                'brand' => 'Yamaha',
                'type' => 'Matic (Skutik)',
                'color' => 'Merah Doff',
                'price' => 18500000,
                'availability' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'Honda',
                'type' => 'Sport Fairing',
                'color' => 'Hitam Glossy',
                'price' => 35800000,
                'availability' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'Kawasaki',
                'type' => 'Naked Bike',
                'color' => 'Hijau Lime',
                'price' => 58900000,
                'availability' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'Suzuki',
                'type' => 'Bebek',
                'color' => 'Biru Metallic',
                'price' => 15250000,
                'availability' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'Vespa',
                'type' => 'Skuter Klasik',
                'color' => 'Kuning Lemon',
                'price' => 42000000,
                'availability' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'BMW Motorrad',
                'type' => 'Touring',
                'color' => 'Abu-abu Titanium',
                'price' => 650000000,
                'availability' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'Harley-Davidson',
                'type' => 'Cruiser',
                'color' => 'Coklat Vintage',
                'price' => 850000000,
                'availability' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'Honda',
                'type' => 'Matic (Skutik)',
                'color' => 'Putih Mutiara',
                'price' => 21750000,
                'availability' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'Yamaha',
                'type' => 'Trail/Adventure',
                'color' => 'Biru Tua',
                'price' => 38000000,
                'availability' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'brand' => 'KTM',
                'type' => 'Supermoto',
                'color' => 'Oranye',
                'price' => 115000000,
                'availability' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
    }
}
