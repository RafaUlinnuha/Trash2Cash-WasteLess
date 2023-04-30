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
            'nama' => 'Plastik'
        ]);
        //kategori 2
        KategoriSampah::create([
            'nama' => 'Kertas'
        ]);
        //kategori 3
        KategoriSampah::create([
            'nama' => 'Elektronik'
        ]);
        //kategori 4
        KategoriSampah::create([
            'nama' => 'Kaca'
        ]);

    }
}
