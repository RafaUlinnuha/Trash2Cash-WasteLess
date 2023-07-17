<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\AlamatUser;
use App\Models\Order;
use App\Models\Produk;
use App\Models\KategoriSampah;
use App\Models\Keranjang;
use Illuminate\Support\Facades\Hash;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //kategori sampah
        //kategori 1
        $kategori1 = KategoriSampah::create([
            'nama' => 'Plastik',
            'slug' => 'plastik',
            'harga' => 3000,
            'gambar' => 'product_images/plastic.png',
        ]);
        //kategori 2
        $kategori2 = KategoriSampah::create([
            'nama' => 'Kertas',
            'slug' => 'kertas',
            'harga' => 2000,
            'gambar' => 'product_images/paper.png',
        ]);
        //kategori 3
        $kategori3 = KategoriSampah::create([
            'nama' => 'Elektronik',
            'slug' => 'elektronik',
            'harga' => 6000,
            'gambar' => 'product_images/electronic.png',
        ]);
        //kategori 4
        $kategori4 = KategoriSampah::create([
            'nama' => 'Kaca dan Kaleng',
            'slug' => 'kaca-dan-kaleng',
            'harga' => 5000,
            'gambar' => 'product_images/glass.png',
        ]);

        $randomImages =[
            'product_images/produk-1.png', //kertas
            'product_images/produk-2.png', //elektronik
            'product_images/produk-3.png', //plastik
            'product_images/produk-4.png', //kacakaleng
            'product_images/produk-5.jpeg',
        ];

        //Pembeli
        $id= fake()->uuid();
        $user= User::create([
            'id' => $id,
            'nama' => 'Pembeli Jatinangor 1',
            'email' => 'pembeli1@mail.com',
            'no_hp' => '082123456787',
            'role' => 'pembeli',
            'password' => Hash::make('password12'),
        ]);
        AlamatUser::create([
            'alamat' => 'Jl Ciseke 7',
            'kecamatan' => 'Jatinangor',
            'kota' => 'Sumedang',
            'provinsi' => 'Jawa Barat',
            'kode_pos' => '12345',
            'user_id' => $id,
        ]);
        Keranjang::create([
            'user_id' => $id
        ]);
        
        $id= fake()->uuid();
        $user= User::create([
            'id' => $id,
            'nama' => 'Pembeli Jatinangor 2',
            'email' => 'pembeli2@mail.com',
            'no_hp' => '082123456788',
            'role' => 'pembeli',
            'password' => Hash::make('password12'),
        ]);
        AlamatUser::create([
            'alamat' => 'Jl Ciseke 8',
            'kecamatan' => 'Jatinangor',
            'kota' => 'Sumedang',
            'provinsi' => 'Jawa Barat',
            'kode_pos' => '12345',
            'user_id' => $id,
        ]);
        Keranjang::create([
            'user_id' => $id
        ]);
        
        $id= fake()->uuid();
        $user= User::create([
            'id' => $id,
            'nama' => 'Pembeli Jatinangor 3',
            'email' => 'pembeli3@mail.com',
            'no_hp' => '082123456789',
            'role' => 'pembeli',
            'password' => Hash::make('password12'),
        ]);
        AlamatUser::create([
            'alamat' => 'Jl Ciseke 9',
            'kecamatan' => 'Jatinangor',
            'kota' => 'Sumedang',
            'provinsi' => 'Jawa Barat',
            'kode_pos' => '12345',
            'user_id' => $id,
        ]);
        Keranjang::create([
            'user_id' => $id
        ]);

        
        //BANK SAMPAH
        $id= fake()->uuid();
        User::create([
            'id' => $id,
            'nama' => 'Bank Sampah Jatinangor 1',
            'email' => 'bank1@mail.com',
            'no_hp' => '082123456784',
            'role' => 'bank_sampah',
            'password' => Hash::make('password12'),
        ]);
        AlamatUser::create([
            'alamat' => 'Jl Ciseke 4',
            'kecamatan' => 'Jatinangor',
            'kota' => 'Sumedang',
            'provinsi' => 'Jawa Barat',
            'kode_pos' => '12345',
            'user_id' => $id,
        ]);
        $nama = 'Gelas Plastik Bening Murah Meriah 1 Kg';
        $gambar = $randomImages[3];
        $slug = \Str::slug($nama);
        
        Produk::create([
            'nama' => $nama,
            'nama_sub_kategori' => 'plastik gelas',
            'jumlah' => fake()->numberBetween(10,150),
            'harga' => fake()->numberBetween(500,6000),
            'deskripsi' => fake()->paragraph(),
            'slug' => $slug,
            'kategori_sampah_id' => $kategori1->id,
            'user_id' => $id,
            'gambar' => $gambar,
        ]);

        $nama = 'Kertas Kardus Bekas Murah Meriah Grosir';
        $gambar = $randomImages[1];
        $slug = \Str::slug($nama);
        
        Produk::create([
            'nama' => $nama,
            'nama_sub_kategori' => 'kertas kardus',
            'jumlah' => fake()->numberBetween(10,150),
            'harga' => fake()->numberBetween(500,6000),
            'deskripsi' => fake()->paragraph(),
            'slug' => $slug,
            'kategori_sampah_id' => $kategori2->id,
            'user_id' => $id,
            'gambar' => $gambar,
        ]);
        
        $nama = 'Botol Kaca Kecap Warna Hijau Bersih';
        $gambar = $randomImages[4];
        $slug = \Str::slug($nama);
        
        Produk::create([
            'nama' => $nama,
            'nama_sub_kategori' => 'botol kaca berwarna',
            'jumlah' => fake()->numberBetween(10,150),
            'harga' => fake()->numberBetween(500,6000),
            'deskripsi' => fake()->paragraph(),
            'slug' => $slug,
            'kategori_sampah_id' => $kategori4->id,
            'user_id' => $id,
            'gambar' => $gambar,
        ]);

        $nama = 'Baterai Campuran Bekas Murah Meriah di Jatinangor';
        $gambar = $randomImages[2];
        $slug = \Str::slug($nama);
        
        Produk::create([
            'nama' => $nama,
            'nama_sub_kategori' => 'Baterai',
            'jumlah' => fake()->numberBetween(10,150),
            'harga' => fake()->numberBetween(500,6000),
            'deskripsi' => fake()->paragraph(),
            'slug' => $slug,
            'kategori_sampah_id' => $kategori3->id,
            'user_id' => $id,
            'gambar' => $gambar,
        ]);

        $id= fake()->uuid();
        User::create([
            'id' => $id,
            'nama' => 'Bank Sampah Jatinangor 2',
            'email' => 'bank2@mail.com',
            'no_hp' => '082123456785',
            'role' => 'bank_sampah',
            'password' => Hash::make('password12'),
        ]);
        AlamatUser::create([
            'alamat' => 'Jl Ciseke 5',
            'kecamatan' => 'Jatinangor',
            'kota' => 'Sumedang',
            'provinsi' => 'Jawa Barat',
            'kode_pos' => '12345',
            'user_id' => $id,
        ]);

        $nama = 'Gelas Plastik Ale Ale Teh Gelas Campur Bersih';
        $gambar = $randomImages[3];
        $slug = \Str::slug($nama);
        
        Produk::create([
            'nama' => $nama,
            'nama_sub_kategori' => 'gelas plastik berwarna',
            'jumlah' => fake()->numberBetween(10,150),
            'harga' => fake()->numberBetween(500,6000),
            'deskripsi' => fake()->paragraph(),
            'slug' => $slug,
            'kategori_sampah_id' => $kategori1->id,
            'user_id' => $id,
            'gambar' => $gambar,
        ]);

        $nama = 'Kertas Karton Kotak Murah Meriah di Jatinangor';
        $gambar = $randomImages[1];
        $slug = \Str::slug($nama);
        
        Produk::create([
            'nama' => $nama,
            'nama_sub_kategori' => 'kertas karton',
            'jumlah' => fake()->numberBetween(10,150),
            'harga' => fake()->numberBetween(500,6000),
            'deskripsi' => fake()->paragraph(),
            'slug' => $slug,
            'kategori_sampah_id' => $kategori2->id,
            'user_id' => $id,
            'gambar' => $gambar,
        ]);
        
        $nama = 'Kaleng Minuman Soda Bersih Murah';
        $gambar = $randomImages[4];
        $slug = \Str::slug($nama);
        
        Produk::create([
            'nama' => $nama,
            'nama_sub_kategori' => 'kaleng',
            'jumlah' => fake()->numberBetween(10,150),
            'harga' => fake()->numberBetween(500,6000),
            'deskripsi' => fake()->paragraph(),
            'slug' => $slug,
            'kategori_sampah_id' => $kategori4->id,
            'user_id' => $id,
            'gambar' => $gambar,
        ]);

        $nama = 'Baterai A2 Murah Meriah 1 Kg';
        $gambar = $randomImages[2];
        $slug = \Str::slug($nama);
        
        Produk::create([
            'nama' => $nama,
            'nama_sub_kategori' => 'baterai',
            'jumlah' => fake()->numberBetween(10,150),
            'harga' => fake()->numberBetween(500,6000),
            'deskripsi' => fake()->paragraph(),
            'slug' => $slug,
            'kategori_sampah_id' => $kategori3->id,
            'user_id' => $id,
            'gambar' => $gambar,
        ]);


        $id= fake()->uuid();
        User::create([
            'id' => $id,
            'nama' => 'Bank Sampah Jatinangor 3',
            'email' => 'bank3@mail.com',
            'no_hp' => '082123456786',
            'role' => 'bank_sampah',
            'password' => Hash::make('password12'),
        ]);
        AlamatUser::create([
            'alamat' => 'Jl Ciseke 6',
            'kecamatan' => 'Jatinangor',
            'kota' => 'Sumedang',
            'provinsi' => 'Jawa Barat',
            'kode_pos' => '12345',
            'user_id' => $id,
        ]);
        $nama = 'Botol Plastik Bening Murah Meriah di Jatinangor';
        $gambar = $randomImages[3];
        $slug = \Str::slug($nama);
        
        Produk::create([
            'nama' => $nama,
            'nama_sub_kategori' => 'botol plastik',
            'jumlah' => fake()->numberBetween(10,150),
            'harga' => fake()->numberBetween(500,6000),
            'deskripsi' => fake()->paragraph(),
            'slug' => $slug,
            'kategori_sampah_id' => $kategori1->id,
            'user_id' => $id,
            'gambar' => $gambar,
        ]);

        $nama = 'Kertas Koran 1 Kg Murah Meriah di Jatinangor';
        $gambar = $randomImages[1];
        $slug = \Str::slug($nama);
        
        Produk::create([
            'nama' => $nama,
            'nama_sub_kategori' => 'kertas koran',
            'jumlah' => fake()->numberBetween(10,150),
            'harga' => fake()->numberBetween(500,6000),
            'deskripsi' => fake()->paragraph(),
            'slug' => $slug,
            'kategori_sampah_id' => $kategori2->id,
            'user_id' => $id,
            'gambar' => $gambar,
        ]);
        
        $nama = 'Botol Kaca Sirup Bening Murah Meriah di Jatinangor';
        $gambar = $randomImages[4];
        $slug = \Str::slug($nama);
        
        Produk::create([
            'nama' => $nama,
            'nama_sub_kategori' => 'botol plastik',
            'jumlah' => fake()->numberBetween(10,150),
            'harga' => fake()->numberBetween(500,6000),
            'deskripsi' => fake()->paragraph(),
            'slug' => $slug,
            'kategori_sampah_id' => $kategori4->id,
            'user_id' => $id,
            'gambar' => $gambar,
        ]);

        $nama = 'Baterai A2 Murah Meriah di Jatinangor';
        $gambar = $randomImages[2];
        $slug = \Str::slug($nama);
        
        Produk::create([
            'nama' => $nama,
            'nama_sub_kategori' => 'botol plastik',
            'jumlah' => fake()->numberBetween(10,150),
            'harga' => fake()->numberBetween(500,6000),
            'deskripsi' => fake()->paragraph(),
            'slug' => $slug,
            'kategori_sampah_id' => $kategori3->id,
            'user_id' => $id,
            'gambar' => $gambar,
        ]);


        //Anggota Bank Sampah
        $id= fake()->uuid();
        User::create([
            'id' => $id,
            'nama' => 'Anggota Bank Sampah 1',
            'email' => 'anggota1@mail.com',
            'no_hp' => '082123456781',
            'role' => 'anggota',
            'password' => Hash::make('password12'),
        ]);
        AlamatUser::create([
            'alamat' => 'Jl Ciseke 1',
            'kecamatan' => 'Jatinangor',
            'kota' => 'Sumedang',
            'provinsi' => 'Jawa Barat',
            'kode_pos' => '12345',
            'user_id' => $id,
        ]);
        Keranjang::create([
            'user_id' => $id
        ]);

        $id= fake()->uuid();
        User::create([
            'id' => $id,
            'nama' => 'Anggota Bank Sampah 2',
            'email' => 'anggota2@mail.com',
            'no_hp' => '082123456782',
            'role' => 'anggota',
            'password' => Hash::make('password12'),
        ]);
        AlamatUser::create([
            'alamat' => 'Jl Ciseke 2',
            'kecamatan' => 'Jatinangor',
            'kota' => 'Sumedang',
            'provinsi' => 'Jawa Barat',
            'kode_pos' => '12345',
            'user_id' => $id,
        ]);
        Keranjang::create([
            'user_id' => $id
        ]);

        $id= fake()->uuid();
        User::create([
            'id' => $id,
            'nama' => 'Anggota Bank Sampah 3',
            'email' => 'anggota3@mail.com',
            'no_hp' => '082123456783',
            'role' => 'anggota',
            'password' => Hash::make('password12'),
        ]);
        AlamatUser::create([
            'alamat' => 'Jl Ciseke 3',
            'kecamatan' => 'Jatinangor',
            'kota' => 'Sumedang',
            'provinsi' => 'Jawa Barat',
            'kode_pos' => '12345',
            'user_id' => $id,
        ]);
        Keranjang::create([
            'user_id' => $id
        ]);

        //ADMIN
        $id= fake()->uuid();
        User::create([
            'id' => $id,
            'nama' => 'ADMIN',
            'email' => 'admin1@mail.com',
            'no_hp' => '082123456791',
            'role' => 'admin',
            'password' => Hash::make('password12'),
        ]);
        AlamatUser::create([
            'alamat' => 'Jl Ciseke 10',
            'kecamatan' => 'Jatinangor',
            'kota' => 'Sumedang',
            'provinsi' => 'Jawa Barat',
            'kode_pos' => '12345',
            'user_id' => $id,
        ]);

    }
}
