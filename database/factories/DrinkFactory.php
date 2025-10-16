<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Drink>
 */
class DrinkFactory extends Factory
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
                'name' => 'Es Kopi Susu Gula Aren',
                'description' => 'Kopi espresso dengan campuran susu segar dan pemanis alami gula aren.',
                'price' => 20000,
                'rating' => 4.5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Matcha Latte Dingin',
                'description' => 'Bubuk matcha premium Jepang yang dikocok dengan susu dan es.',
                'price' => 25000,
                'rating' => 4.7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Jus Alpukat Cokelat',
                'description' => 'Jus alpukat murni dengan sedikit susu kental manis cokelat.',
                'price' => 18000,
                'rating' => 4.3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Air Mineral Kemasan',
                'description' => 'Air mineral alami murni dalam botol 600ml.',
                'price' => 5000,
                'rating' => 5.0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Smoothie Pisang Stroberi',
                'description' => 'Campuran pisang, stroberi beku, dan sedikit yogurt rendah lemak.',
                'price' => 30000,
                'rating' => 4.6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Teh Lemon Madu Panas',
                'description' => 'Teh hitam premium disajikan dengan irisan lemon segar dan madu asli.',
                'price' => 15000,
                'rating' => 4.2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Bubble Milk Tea Klasik',
                'description' => 'Teh susu dengan topping boba/pearls kenyal yang manis.',
                'price' => 22000,
                'rating' => 4.4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Mocktail Sunset Fizz',
                'description' => 'Minuman soda campuran sirup jeruk, grenadine, dan potongan buah.',
                'price' => 28000,
                'rating' => 4.8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Wedang Jahe',
                'description' => 'Minuman tradisional penghangat badan dari jahe segar dan gula merah.',
                'price' => 12000,
                'rating' => 4.5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Infused Water Mentimun Mint',
                'description' => 'Air putih yang diinfusi dengan irisan mentimun dan daun mint segar.',
                'price' => 10000,
                'rating' => 4.9,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
    }
}
