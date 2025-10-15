<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Movie::query()->withoutCache()->count() > 0) return;

        $data = Movie::factory()->make();

        Movie::insert($data->toArray());
    }
}
