<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\AlamatUser;
use App\Models\Produk;
use App\Models\Order;
use App\Models\ItemOrder;
use App\Models\Pembayaran;
use App\Models\Keranjang;
use App\Models\ItemKeranjang;
use App\Models\MetodePembayaran;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AwalSeeder::class,
        ]);

        // $user = User::factory(3)
        // ->has(AlamatUser::factory()->state([
        //     'provinsi' => 'Jawa Barat',
        //     'kota' => 'Sumedang',
        //     'kecamatan' => 'Jatinangor',
        // ]))
        // ->has(MetodePembayaran::factory())
        // ->create([ 
        //     'role' => 'anggota',
        // ])
        
        // ;
        
        // $user = User::factory(3)
        // ->has(AlamatUser::factory()->state([
        //     'provinsi' => 'Jawa Barat',
        //     'kota' => 'Sumedang',
        //     'kecamatan' => 'Jatinangor',
        // ]))
        // ->has(MetodePembayaran::factory())
        // ->has(Produk::factory()->count(4))
        // ->create([
        //     'role' => 'bank_sampah',
        // ])
        // ;
        
        // $user = User::factory(3)
        // ->has(AlamatUser::factory()->state([
        //     'provinsi' => 'Jawa Barat',
        //     'kota' => 'Sumedang',
        //     'kecamatan' => 'Jatinangor',
        // ]))
        // ->has(MetodePembayaran::factory())
        // ->has(Keranjang::factory())
        // ->create([
        //     'role' => 'pembeli',
        // ])
        // ;
    }
}