<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::all();
        return [
            //
            'name' => fake()->unique()->word(),
            'email' => fake()->unique()->safeEmail(),
            'age' => fake()->numberBetween(18, 80),
            'gender' => fake()->randomElement(['male', 'female']),
            'phone' => fake()->unique()->phoneNumber(),
            'user_id' => $users->random()->id,
        ];
    }
}
