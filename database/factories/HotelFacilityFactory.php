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
            'hotel_id' => 1,
            'fitness_centre' => true,
            'bar' => true,
            'swimming_pool' => false,
            'free_wifi' => true
        ];
    }
}
