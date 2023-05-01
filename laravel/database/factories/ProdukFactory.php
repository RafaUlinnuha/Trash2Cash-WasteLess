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
        return [
            'id' => fake()->uuid(),
            'nama' => fake()->sentence(),
            'nama_sub_kategori' => fake()->sentence(2),
            'jumlah' => fake()->numberBetween(10,150),
            'harga' => fake()->numberBetween(500,6000),
            'deskripsi' => fake()->paragraph(),
            'kategori_id' => fake()->randomElement(KategoriSampah::query()->get('id'))
        ];
    }
}
