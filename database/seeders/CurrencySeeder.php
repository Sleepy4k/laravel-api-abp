<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Currency::query()->withoutCache()->count() > 0) return;

        $data = Currency::factory()->make();

        Currency::insert($data->toArray());
    }
}
