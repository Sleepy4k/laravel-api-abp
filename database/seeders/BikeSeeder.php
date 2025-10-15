<?php

namespace Database\Seeders;

use App\Models\Bike;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Bike::query()->withoutCache()->count() > 0) return;

        $data = Bike::factory()->make();

        Bike::insert($data->toArray());
    }
}
