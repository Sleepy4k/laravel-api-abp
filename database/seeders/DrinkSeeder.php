<?php

namespace Database\Seeders;

use App\Models\Drink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Drink::query()->withoutCache()->count() > 0) return;

        $data = Drink::factory()->make();

        Drink::insert($data->toArray());
    }
}
