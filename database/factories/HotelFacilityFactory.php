<?php

namespace Database\Factories;

use App\Models\HotelFacility;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HotelFacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'hotel_id' => $this->faker->unique()->numberBetween(1, 20),
            'fitness_centre' => $this->faker->boolean(),
            'bar' => $this->faker->boolean(),
            'swimming_pool' => $this->faker->boolean(),
            'parking' => $this->faker->boolean(),
            'free_wifi' => $this->faker->boolean(),
        ];
    }
}
