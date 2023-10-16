<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'message_id' => fake()->numberBetween(1, 100),
            'user_name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'text' => fake()->paragraph(),
            'home_page' => fake()->url(),
        ];
    }
}
