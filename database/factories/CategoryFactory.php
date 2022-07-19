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
                'slug'  => 'dedicated-servers'
            ],
            [
                'parent_id' => null,
                'title' => 'Cloud Servers',
                'slug'  => 'cloud-servers'
            ],
            [
                'parent_id' => null,
                'title' => 'colocation',
                'slug'  => 'colocation'
            ],
            [
                'parent_id' => 1,
                'title' => 'Blaze Dedicted Servers',
                'slug'  => 'blaze-dedicated-servers'
            ],
            [
                'parent_id' => 1,
                'title' => 'Enterprise Dedicted Servers',
                'slug'  => 'enterprise-dedicated-servers'
            ],
            [
                'parent_id' => 1,
                'title' => 'GPU Dedicted Servers',
                'slug'  => 'gpu-dedicated-servers'
            ],
            [
                'parent_id' => 1,
                'title' => 'Value Dedicted Servers',
                'slug'  => 'value-dedicated-servers'
            ],
            [
                'parent_id' => 2,
                'title' => 'Essentials Cloud Servers',
                'slug'  => 'essentials-dedicated-servers'
            ],
            [
                'parent_id' => 2,
                'title' => 'Storage Cloud Servers',
                'slug'  => 'storage-dedicated-servers'
            ],
            [
                'parent_id' => 3,
                'title' => 'Colocation',
                'slug'  => 'colocation'
            ]
        ]);
    }
}
