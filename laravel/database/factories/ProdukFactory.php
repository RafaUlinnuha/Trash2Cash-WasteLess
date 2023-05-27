<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\KategoriSampah;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // table->uuid('id')->primary();
        //     $table->string('nama');
        //     $table->string('nama_sub_kategori',255) -> nullable();
        //     $table->integer('jumlah');
        //     $table->float('harga');
        //     $table->text('deskripsi')->nullable();
        //     $table->string('gambar')->nullable();

        //     //FK
        //     $table->foreignUuid('user_id')->references('id')->on('users');
        //     $table->foreignUuid('kategori_id')->references('id')->on('kategori_sampahs');
            
        //     $table->timestamps();
        $randomImages =[
            'product_images/produk-1.png',
            'product_images/produk-2.png',
            'product_images/produk-3.png',
            'product_images/produk-4.png',
            'product_images/produk-5.jpeg',
        ];

        $kategoriId = fake()->randomElement(KategoriSampah::query()->get('id'));
        $kategori = KategoriSampah::where('id', $kategoriId['id'])->pluck('nama');
        //$out = new \Symfony\Component\Console\Output\ConsoleOutput();
        //$out->writeln($kategori);
        if ($kategori == '["Plastik"]')
        {
            $gambar = $randomImages[3];
        } 
        else if($kategori == '["Kertas"]')
        {
            $gambar = $randomImages[1];
        } 
        else if($kategori == '["Elektronik"]')
        {
            $gambar = $randomImages[2];
        } 
        else if ($kategori == '["Kaca dan Kaleng"]')
        {
            $gambar = $randomImages[4];
        }

        $nama = fake()->sentence();
        $slug = \Str::slug($nama);
        
        return [
            'id' => fake()->uuid(),
            'nama' => $nama,
            'nama_sub_kategori' => fake()->sentence(2),
            'jumlah' => fake()->numberBetween(10,150),
            'harga' => fake()->numberBetween(500,6000),
            'deskripsi' => fake()->paragraph(),
            'slug' => $slug,
            'kategori_sampah_id' => $kategoriId,
            'gambar' => $gambar,
        ];
    }
}
