<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Server>
 */
class ServerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $products = [
            'Blaze',
            'Enterprise',
            'Value'
        ];

        $memory = [
            '8',
            '16',
            '32',
            '64'
        ];

        return [
            'name' => $products[rand(0, count($products) - 1)],
            'price' => $this->faker->numberBetween(80, 4000),
            'processor_line_1' => 'Intel Xeon E-2374G 4 Cores 8 HT Cores',
            'processor_line_2' => '3.7Ghz with 5.1Ghz Boost',
            'memory' => $memory[rand(0, count($memory) - 1)] . ' DDR4 ECC',
            'storage_line_1' => '2x 480GB M.2 Enterprise',
            'storage_line_2' => 'NVMe 100,000 IOPS',
            'data' => '7TB @ 2x 10Gbe Network Ports',
            'benchmark' => $this->faker->numberBetween(14000, 100000)
        ];
    }
}
