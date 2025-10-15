<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
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
                'title' => 'Pengabdi Setan 2: Communion',
                'description' => 'Keluarga Rini kembali dihantui teror setelah pindah ke rumah susun yang terpencil.',
                'release_year' => 2022,
                'genre' => 'Horor',
                'director' => 'Joko Anwar'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'Parasite',
                'description' => 'Kisah keluarga miskin yang menyusup ke kehidupan keluarga kaya raya, mengungkap ketidaksetaraan sosial.',
                'release_year' => 2019,
                'genre' => 'Thriller, Komedi Hitam',
                'director' => 'Bong Joon-ho'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'Avengers: Endgame',
                'description' => 'Para pahlawan yang tersisa berusaha membalikkan kehancuran yang ditimbulkan oleh Thanos.',
                'release_year' => 2019,
                'genre' => 'Aksi, Fiksi Ilmiah',
                'director' => 'Anthony Russo, Joe Russo'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'Dilan 1990',
                'description' => 'Kisah romansa SMA antara Dilan, anggota geng motor yang pintar, dan Milea.',
                'release_year' => 2018,
                'genre' => 'Romantis, Drama',
                'director' => 'Fajar Bustomi'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'Inception',
                'description' => 'Seorang pencuri yang ahli dalam seni ekstraksi mimpi ditugaskan untuk misi yang mustahil: inception.',
                'release_year' => 2010,
                'genre' => 'Fiksi Ilmiah, Aksi',
                'director' => 'Christopher Nolan'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'The Godfather',
                'description' => 'Saga epik tentang keluarga kriminal Italia-Amerika yang dipimpin oleh Vito Corleone.',
                'release_year' => 1972,
                'genre' => 'Kriminal, Drama',
                'director' => 'Francis Ford Coppola'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'Miracle in Cell No. 7 (Versi Korea)',
                'description' => 'Pria dengan disabilitas mental dipenjara secara tidak adil dan berteman dengan tahanan lain.',
                'release_year' => 2013,
                'genre' => 'Komedi, Melodrama',
                'director' => 'Lee Hwan-kyung'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'Mengejar Matahari',
                'description' => 'Kisah persahabatan empat sahabat karib yang tumbuh besar bersama di pinggiran kota.',
                'release_year' => 2004,
                'genre' => 'Drama',
                'director' => 'Riri Riza'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'Pulp Fiction',
                'description' => 'Jalinan kisah dari berbagai karakter di dunia kriminal Los Angeles.',
                'release_year' => 1994,
                'genre' => 'Kriminal, Neo-Noir',
                'director' => 'Quentin Tarantino'
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'title' => 'Spider-Man: No Way Home',
                'description' => 'Peter Parker meminta bantuan Doctor Strange untuk menghapus ingatannya sebagai Spider-Man, namun malah membuka portal multiverse.',
                'release_year' => 2021,
                'genre' => 'Aksi, Pahlawan Super',
                'director' => 'Jon Watts'
            ]
        ];
    }
}
