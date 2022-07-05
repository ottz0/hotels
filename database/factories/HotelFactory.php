<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\HotelCategory;
use App\Models\Hotel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    protected $model = Hotel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'cat_id' => $this->faker->numberBetween(1, 5),
            'address' => $this->faker->streetAddress(),
            'postcode' => $this->faker->postcode(),
            'state' => $this->faker->stateAbbr(),
            'star_rating' => rand(0,5),
        ];
    }
}
