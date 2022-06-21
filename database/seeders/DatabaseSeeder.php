<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Hotel;
use App\Models\HotelFacility;
use App\Models\User;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $hotelNames = DB::table('hotels')->insert([
        //     ['name' => 'The Anchorage'],
        //     ['name' => 'Ibis Budget Sydeny East'],
        //     ['name' => 'Hilton Sydney'],
        //     ['name' => 'Travelodge Hotel Sydney'],
        //     ['name' => 'The Charrington Hotel of Chatswood'],
        //     ['name' => 'YEHS Hotel Sydney CBD'],
        //     ['name' => 'Great Souther Hotel Sydney'],
        //     ['name' => 'Park Hyat Sydney'],
        // ]);

        // $facilities = DB::table('hotel_facilities')->insert([
        //     'hotel_id' => 1,
        //     'fitness_centre' => true,
        //     'bar' => true,
        //     'swimming_pool' => false,
        //     'free_wifi' => true,
        //     'parking' => true,
        // ]);

        //HotelFacility::factory()->count(20)->create();

        // Hotel::factory()->count(8)->make()->each(function($hotelNames) use ($hotels){
        //     $comment->blog_post_id = $posts->random()->id;
        //     $comment->save();
        // });
        User::factory()->default()->create();
        User::factory()->count(20)->create();

        Hotel::factory()->count(20)->create();

        HotelFacility::factory()->count(20)->create();

        Review::factory()->count(50)->create();




    }
}
