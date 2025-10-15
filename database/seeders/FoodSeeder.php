<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Food::query()->withoutCache()->count() > 0) return;

        $data = Food::factory()->make();

        Food::insert($data->toArray());
    }
}
