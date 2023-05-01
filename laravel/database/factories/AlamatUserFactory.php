<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alamat_user>
 */
class AlamatUserFactory extends Factory
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
            'alamat' => fake()->streetAddress(),
            'kecamatan' => fake()->streetName(), // anggap aja ini kecamatan hehe, gaada di faker
            'kota' => fake() -> city(),
            'provinsi' => fake()-> state(), // anggap aja provinsi hehe
            'kode_pos' => substr(fake()->postcode(),0,5),
        ];
    }
}
