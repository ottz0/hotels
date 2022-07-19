<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Server;

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

        User::factory(10)->create();
        User::factory()->default()->create();
        Category::factory()->default();
        Server::factory()->default();
        Server::factory(100)->valueServers()->create();


        //Server::factory()->count(200)->create();

        //Server::factory(200)->servers()->create();


    }
}
