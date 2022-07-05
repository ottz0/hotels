<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HotelCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

    }

    public function default()
    {
        $servers = DB::table('hotel_categories')->insert([
            ['name' => 'hotels'],
            ['name' => 'b&b'],
            ['name' => 'resorts'],
            ['name' => 'motels'],
            ['name' => 'holiday-parks']
        ]);
    }
}
