<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
        ];
    }

    public function default()
    {
        $categories = DB::table('categories')->insert([
            [
                'parent_id' => null,
                'title' => 'Dedicated Servers',
                'tagline' => '',
                'slug'  => 'dedicated-servers'
            ],
            [
                'parent_id' => null,
                'title' => 'Cloud Servers',
                'tagline' => '',
                'slug'  => 'cloud-servers'
            ],
            [
                'parent_id' => null,
                'title' => 'Colocation',
                'tagline' => '',
                'slug'  => 'colocation'
            ],
            [
                'parent_id' => 1,
                'title' => 'Blaze Dedicated Servers',
                'tagline' => 'Perfect for everyday business',
                'slug'  => 'blaze-dedicated-servers'
            ],
            [
                'parent_id' => 1,
                'title' => 'Enterprise Dedicated Servers',
                'tagline' => 'Maximum Enterprise performance',
                'slug'  => 'enterprise-dedicated-servers'
            ],
            [
                'parent_id' => 1,
                'title' => 'GPU Dedicated Servers',
                'tagline' => 'Huge GPU prodcessing',
                'slug'  => 'gpu-dedicated-servers'
            ],
            [
                'parent_id' => 1,
                'title' => 'Value Dedicated Servers',
                'tagline' => 'Up in minutes, No long term contracts',
                'slug'  => 'value-dedicated-servers'
            ],
            [
                'parent_id' => 2,
                'title' => 'Essentials Cloud Servers',
                'tagline' => '',
                'slug'  => 'essentials-dedicated-servers'
            ],
            [
                'parent_id' => 2,
                'title' => 'Storage Cloud Servers',
                'tagline' => '',
                'slug'  => 'storage-dedicated-servers'
            ],
            [
                'parent_id' => 3,
                'title' => 'Colocation',
                'tagline' => '',
                'slug'  => 'colocation'
            ]
        ]);
    }
}
