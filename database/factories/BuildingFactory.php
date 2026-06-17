<?php

namespace Database\Factories;

use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Building>
 */
class BuildingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'name' => fake()->name(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'total_floors' => fake()->numberBetween(1 , 50),
            'building_type' => "commercial", 
        ];
    }
}
