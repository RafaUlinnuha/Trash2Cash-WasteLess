<?php

namespace Database\Seeders;
use App\Models\KategoriSampah;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class KategoriSampahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //kategori 1
        KategoriSampah::create([
            'nama' => 'Plastik',
            'slug' => 'plastik',
            'harga' => 3000,
            'gambar' => 'product_images/plastic.png',
        ]);
        //kategori 2
        KategoriSampah::create([
            'nama' => 'Kertas',
            'slug' => 'kertas',
            'harga' => 2000,
            'gambar' => 'product_images/paper.png',
        ]);
        //kategori 3
        KategoriSampah::create([
            'nama' => 'Elektronik',
            'slug' => 'elektronik',
            'harga' => 6000,
            'gambar' => 'product_images/electronic.png',
        ]);
        //kategori 4
        KategoriSampah::create([
            'nama' => 'Kaca dan Kaleng',
            'slug' => 'kaca-dan-kaleng',
            'harga' => 5000,
            'gambar' => 'product_images/glass.png',
        ]);

    }
}
