<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Car::query()->withoutCache()->count() > 0) return;

        $data = Car::factory()->make();

        Car::insert($data->toArray());
    }
}
