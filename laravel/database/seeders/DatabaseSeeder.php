<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\AlamatUser;
use App\Models\Produk;
use App\Models\Order;
use App\Models\ItemOrder;
use App\Models\Pembayaran;
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
            KategoriSampahSeeder::class,
        ]);

        User::factory(10)
            ->has(AlamatUser::factory())
            ->has(MetodePembayaran::factory()->count(4))
            ->has(Produk::factory()->count(4))
            ->has(Order::factory()
                -> hasPembayaran()
                -> hasItemOrder(2)
            )
            ->create();


        
            
        // $order = Order::factory(10)
        //     ->has(Pembayaran::factory(), 'pembayaran')
        //     ->create();
    }
}