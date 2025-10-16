<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
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
                'name' => 'PT Solusi Teknologi Nusantara',
                'address' => 'Jl. Jend. Sudirman Kav. 52-53, Jakarta Selatan',
                'email' => 'info@solusinusantara.com',
                'phone' => '+622150889900',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'CV Karya Abadi Bersama',
                'address' => 'Komplek Pergudangan Ruko Blok A-10, Surabaya',
                'email' => 'marketing@karyaabadi.co.id',
                'phone' => '+623187654321',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Bank Sentosa Makmur Tbk.',
                'address' => 'Gedung Sentosa, Jl. Thamrin No. 1, Jakarta Pusat',
                'email' => 'layanan@banksentosa.com',
                'phone' => '+622114000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'PT Media Kreatif Indonesia',
                'address' => 'Jalan Pahlawan No. 12, Bandung',
                'email' => 'redaksi@mediakreatif.id',
                'phone' => '+62224200100',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Klinik Sehat Selalu',
                'address' => 'Jl. Kesehatan Raya No. 5, Sleman, Yogyakarta',
                'email' => 'admin@kliniksehat.com',
                'phone' => '+62274888777',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Yayasan Pendidikan Harapan Bangsa',
                'address' => 'Kompleks Sekolah Blok F-3, Semarang',
                'email' => 'info@harapanbangsa.org',
                'phone' => '+62243540000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Toko Furnitur Mewah Indah',
                'address' => 'Jl. Raya Bogor KM 20, Depok',
                'email' => 'sales@furniturmewah.com',
                'phone' => '+622177889900',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'PT Manufaktur Baja Perkasa',
                'address' => 'Kawasan Industri Cikarang Blok D-5, Bekasi',
                'email' => 'hrd@bajaperkasa.co.id',
                'phone' => '+622189345678',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Coffee Shop Kopi Santai',
                'address' => 'Jalan Setiabudi No. 45A, Medan',
                'email' => 'kopisantai.medan@gmail.com',
                'phone' => '+62614561234',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'Konsultan Hukum Adil & Rekan',
                'address' => 'Gedung Themis Lantai 15, Kuningan, Jakarta',
                'email' => 'contact@hukumadil.com',
                'phone' => '+622152901122',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
    }
}
