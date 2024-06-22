<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Equipment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fault>
 */
class FaultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'equipment_id' => $this->faker->randomElement(Equipment::all()),
            'title' => $this->faker->word(),
            'description' => $this->faker->sentences(3,true)
        ];
    }
}
