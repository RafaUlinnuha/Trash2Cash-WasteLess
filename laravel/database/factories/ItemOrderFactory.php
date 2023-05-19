<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produk;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item_order>
 */
class ItemOrderFactory extends Factory
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
            'jumlah' => fake()->numberBetween(1,50),
            'produk_id' => fake()->randomElement(Produk::query()->get('id'))
        ];
    }
}
