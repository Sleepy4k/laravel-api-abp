<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
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
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'published_year' => 2005,
                'genre' => 'Fiksi/Pendidikan',
                'isbn' => '978-9791227005'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'Filosofi Teras',
                'author' => 'Henry Manampiring',
                'published_year' => 2018,
                'genre' => 'Pengembangan Diri',
                'isbn' => '978-6020619022'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'Bumi Manusia',
                'author' => 'Pramoedya Ananta Toer',
                'published_year' => 1980,
                'genre' => 'Fiksi Sejarah',
                'isbn' => '978-9799276222'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'The Lord of the Rings',
                'author' => 'J.R.R. Tolkien',
                'published_year' => 1954,
                'genre' => 'Fantasi',
                'isbn' => '978-0618260233'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'published_year' => 2018,
                'genre' => 'Produktivitas',
                'isbn' => '978-0735211292'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => '1984',
                'author' => 'George Orwell',
                'published_year' => 1949,
                'genre' => 'Distopia',
                'isbn' => '978-0451524935'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'Senja di Jakarta',
                'author' => 'Mochtar Lubis',
                'published_year' => 1963,
                'genre' => 'Fiksi Sosial',
                'isbn' => '978-9799100060'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'Dasar-Dasar Pemrograman Python',
                'author' => 'R. H. Sianipar',
                'published_year' => 2022,
                'genre' => 'Non-Fiksi/Teknologi',
                'isbn' => '978-6230912345'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'Sherlock Holmes: A Study in Scarlet',
                'author' => 'Arthur Conan Doyle',
                'published_year' => 1887,
                'genre' => 'Misteri',
                'isbn' => '978-0140439088'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'Laut Bercerita',
                'author' => 'Leila S. Chudori',
                'published_year' => 2017,
                'genre' => 'Fiksi Sejarah',
                'isbn' => '978-9799106949'
            ]
        ];
    }
}
