<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Program>
 */
class ProgramFactory extends Factory
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
                'symptoms' => fake()->sentence(),
                'remedy' => fake()->sentence(),
                'user_id' => $users->random()->id,   
                
            ];
    }
}
