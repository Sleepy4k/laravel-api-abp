<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
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
                'name' => 'Nasi Goreng Spesial',
                'description' => 'Nasi yang digoreng dengan bumbu khas, telur, ayam suwir, dan udang.',
                'price' => 25000,
                'rating' => 4.7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Rendang Sapi',
                'description' => 'Daging sapi yang dimasak perlahan dalam santan dan bumbu kaya rempah hingga kering.',
                'price' => 35000,
                'rating' => 4.9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Sate Ayam Madura',
                'description' => 'Potongan daging ayam yang dibakar dengan bumbu kacang manis gurih.',
                'price' => 22000,
                'rating' => 4.5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Gado-Gado Komplit',
                'description' => 'Campuran sayuran segar, lontong, tahu, tempe, dan bumbu kacang pedas sedang.',
                'price' => 18000,
                'rating' => 4.3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Martabak Manis Cokelat Keju',
                'description' => 'Kue tebal manis dengan topping cokelat meses dan keju parut.',
                'price' => 38000,
                'rating' => 4.6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Sop Buntut',
                'description' => 'Sup kaldu sapi bening dengan potongan buntut sapi, wortel, dan kentang.',
                'price' => 45000,
                'rating' => 4.8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Pempek Kapal Selam',
                'description' => 'Makanan Palembang dari ikan yang diisi telur, disajikan dengan kuah cuka hitam.',
                'price' => 20000,
                'rating' => 4.4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Pizza Margherita',
                'description' => 'Roti pizza dengan saus tomat, keju mozzarella, dan daun basil segar.',
                'price' => 70000,
                'rating' => 4.7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Sushi Salmon Mentai',
                'description' => 'Nasi gulung dengan salmon di atasnya, dilapisi saus mentai yang dibakar.',
                'price' => 55000,
                'rating' => 4.5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Mie Kuah Kari Ayam',
                'description' => 'Mie kuning dengan kuah kari kental, potongan ayam, dan sayuran.',
                'price' => 28000,
                'rating' => 4.2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
    }
}
