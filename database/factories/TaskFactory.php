<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Task;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // avatar, name, description, priority, completed
        return [
            'avatar' => null,
            'name' => $this->faker->name,
            'description' => substr($this->faker->sentence(1), 0, -1),
            'priority' => 'low',
            'completed' => false
        ];
    }
}
