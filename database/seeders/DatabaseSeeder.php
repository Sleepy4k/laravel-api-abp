<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $isMustSilent = app()->environment('production');

        Artisan::call('optimize:clear', [
            '--no-interaction' => true,
            '--quiet' => $isMustSilent,
        ]);

        $this->call([
            CompanySeeder::class,
            CarSeeder::class,
            BikeSeeder::class,
            BookSeeder::class,
            DrinkSeeder::class,
            FoodSeeder::class,
            MovieSeeder::class,
            CurrencySeeder::class,
        ], $isMustSilent);
    }
}
