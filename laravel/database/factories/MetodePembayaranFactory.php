<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Metode_Pembayaran>
 */
class MetodePembayaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => fake()->uuid(),
            'nama_metode' => fake()->word(),
            'atas_nama' => fake()->name(),
            'no_rek' => fake()->creditCardNumber(), 
        ];
    }
}
