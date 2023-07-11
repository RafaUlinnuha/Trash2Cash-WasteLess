<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->name();
        $domain = '@mail.com';
        $email = fake()->numerify('user###').$domain;
        return [
            'id' => fake()->uuid(),
            'nama' => $name,
            'email' => $email,
            'password' => Hash::make('password12'), // password
            'no_hp' => fake()->e164PhoneNumber(),
            'foto_profil' => 'foto_user/blank_profil.jpeg',
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    // public function unverified()
    // {
    //     return $this->state(fn (array $attributes) => [
    //         'email_verified_at' => null,
    //     ]);
    // }
}
