<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Book::query()->withoutCache()->count() > 0) return;

        $data = Book::factory()->make();

        Book::insert($data->toArray());
    }
}
