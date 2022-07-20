<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
        $memory = ['8','16','32','64'];

        return [
            'price' => $this->faker->numberBetween(80, 4000),
            'processor_line_1' => 'Intel Xeon E-2374G 4 Cores 8 HT Cores',
            'processor_line_2' => '3.7Ghz with 5.1Ghz Boost',
            'memory' => $memory[rand(0, count($memory) - 1)] . ' DDR4 ECC',
            'storage_line_1' => '2x 480GB M.2 Enterprise',
            'storage_line_2' => 'NVMe 100,000 IOPS',
            'data' => '7TB @ 2x 10Gbe Network Ports',
            'benchmark' => $this->faker->numberBetween(14000, 100000),
            'benchmark_percentage' => $this->faker->numberBetween(10, 100)
        ];
    }

    public function default()
    {
        $servers = DB::table('servers')->insert([
            [
                'category_id' => 4,
                'type' => 'blaze',
                'title' => 'Blaze 4',
                'price' => 299,
                'processor_line_1' => 'Intel Xeon E-2374G 4 Cores 8 HT Cores',
                'processor_line_2' => '3.7Ghz with 5.1Ghz Boost',
                'memory' => '32GB DDR4 ECC',
                'storage_line_1' => '2x 480GB M.2 Enterprise NVMe',
                'storage_line_2' => '100,000 IOPS',
                'data' => '7TB @ 2x 10Gbe Network Ports',
                'benchmark' => 14086,
                'benchmark_percentage' => '20'
            ],
            [
                'category_id' => 4,
                'type' => 'blaze',
                'title' => 'Blaze 6',
                'price' => 349,
                'processor_line_1' => 'Intel Xeon E-2386G 6 Cores 12 HT Cores',
                'processor_line_2' => '3.5Ghz with 5.1Ghz Boost',
                'memory' => '64GB DDR4 ECC',
                'storage_line_1' => '2x 960GB Enterprise NVMe',
                'storage_line_2' => '100,000 IOPS',
                'data' => '7TB @ 2x 10Gbe Network Ports',
                'benchmark' => 17132,
                'benchmark_percentage' => '40'
            ],
            [
                'category_id' => 4,
                'type' => 'blaze',
                'title' => 'Blaze 8',
                'price' => 399,
                'processor_line_1' => 'Intel Xeon E-2388G 8 Cores 16 HT Cores',
                'processor_line_2' => '3.2Ghz with 5.1Ghz Boost',
                'memory' => '64GB DDR4 ECC',
                'storage_line_1' => '2x 1.92TB Enterprise NVMe',
                'storage_line_2' => '100,000 IOPS',
                'data' => '7TB @ 2x 10Gbe Network Ports',
                'benchmark' => 23501,
                'benchmark_percentage' => '60'
            ],
            [
                'category_id' => 5,
                'type' => 'enterprise',
                'title' => 'Enterprise 16',
                'price' => 649,
                'processor_line_1' => 'AMD EPYC 7313P 16 Cores 32 HT Cores',
                'processor_line_2' => '3.0GHz with 3.7Ghz Boost',
                'memory' => '128GB DDR4 ECC',
                'storage_line_1' => '2x 240GB SSD Enterprise Drives RAID 1 OS',
                'storage_line_2' => '2x 1.92TB Enterprise NVME RAID 1 Data - 900,000 IOPS',
                'data' => '7TB @ 2x 10Gbe Network Ports',
                'benchmark' => 39000,
                'benchmark_percentage' => '60'
            ],
            [
                'category_id' => 5,
                'type' => 'enterprise',
                'title' => 'Enterprise 24',
                'price' => 849,
                'processor_line_1' => 'AMD EPYC 7443P 24 Cores 48 HT Cores',
                'processor_line_2' => '2.85GHz with 4Ghz Boost',
                'memory' => '256GB DDR4 ECC',
                'storage_line_1' => '2x 240GB SSD Enterprise Drives RAID 1 OS',
                'storage_line_2' => '2x 1.92TB Enterprise NVME RAID 1 Data - 900,000 IOPS',
                'data' => '7TB @ 2x 10Gbe Network Ports',
                'benchmark' => 58000,
                'benchmark_percentage' => '65'
            ],
            [
                'category_id' => 5,
                'type' => 'enterprise',
                'title' => 'Enterprise 32',
                'price' => 1199,
                'processor_line_1' => '2x Intel Xeon Gold 6346 16 Core 32 HT Core',
                'processor_line_2' => '3.1Ghz with 3.6Ghz Boost',
                'memory' => '256GB DDR4 ECC',
                'storage_line_1' => '2x 240GB SSD Enterprise Drives RAID 1 OS',
                'storage_line_2' => '2x 1.92TB Enterprise NVME RAID 1 Data - 900,000 IOPS',
                'data' => '7TB @ 2x 10Gbe Network Ports',
                'benchmark' => 55000,
                'benchmark_percentage' => '70'
            ],
            [
                'category_id' => 5,
                'type' => 'enterprise',
                'title' => 'Enterprise 48',
                'price' => 1399,
                'processor_line_1' => '2x AMD EPYC 7443 24 Cores 48 HT Core',
                'processor_line_2' => '2.85Ghz with 3.7Ghz Boost',
                'memory' => '256GB DDR4 ECC',
                'storage_line_1' => '2x 240GB SSD Enterprise Drives RAID 1 OS',
                'storage_line_2' => '2x 3.84TB Enterprise NVME RAID 1 Data - 900,000 IOPS',
                'data' => '7TB @ 2x 10Gbe Network Ports',
                'benchmark' => 82500,
                'benchmark_percentage' => '75'
            ],
            [
                'category_id' => 5,
                'type' => 'enterprise',
                'title' => 'Enterprise 64',
                'price' => 1799,
                'processor_line_1' => '2x AMD EPYC 7543 32 Core 48 HT Core',
                'processor_line_2' => '2.8Ghz with 3.7Ghz Boost',
                'memory' => '512GB DDR4 ECC',
                'storage_line_1' => '2x 240GB SSD Enterprise Drives RAID 1 OS',
                'storage_line_2' => '2x 3.84TB Enterprise NVME RAID 1 Data - 900,000 IOPS',
                'data' => '7TB @ 2x 10Gbe Network Ports',
                'benchmark' => 103492,
                'benchmark_percentage' => '90'
            ],
            [
                'category_id' => 6,
                'type' => 'gpu',
                'title' => 'GPU 24',
                'price' => 1299,
                'processor_line_1' => '2x AMD EPYC 7543 32 Core 48 HT Core',
                'processor_line_2' => '2.8Ghz with 3.7Ghz Boost',
                'memory' => '512GB DDR4 ECC',
                'storage_line_1' => '2x 240GB SSD Enterprise Drives RAID 1 OS',
                'storage_line_2' => '2x 3.84TB Enterprise NVME RAID 1 Data - 900,000 IOPS',
                'data' => '7TB @ 2x 10Gbe Network Ports',
                'benchmark' => 103492,
                'benchmark_percentage' => '90'
            ],
            [
                'category_id' => 6,
                'type' => 'gpu',
                'title' => 'GPU 48',
                'price' => 1799,
                'processor_line_1' => '2x AMD EPYC 7543 32 Core 48 HT Core',
                'processor_line_2' => '2.8Ghz with 3.7Ghz Boost',
                'memory' => '512GB DDR4 ECC',
                'storage_line_1' => '2x 240GB SSD Enterprise Drives RAID 1 OS',
                'storage_line_2' => '2x 3.84TB Enterprise NVME RAID 1 Data - 900,000 IOPS',
                'data' => '7TB @ 2x 10Gbe Network Ports',
                'benchmark' => 103492,
                'benchmark_percentage' => '90'
            ],
            [
                'category_id' => 6,
                'type' => 'gpu',
                'title' => 'GPU 64',
                'price' => 2299,
                'processor_line_1' => '2x AMD EPYC 7543 32 Core 48 HT Core',
                'processor_line_2' => '2.8Ghz with 3.7Ghz Boost',
                'memory' => '512GB DDR4 ECC',
                'storage_line_1' => '2x 240GB SSD Enterprise Drives RAID 1 OS',
                'storage_line_2' => '2x 3.84TB Enterprise NVME RAID 1 Data - 900,000 IOPS',
                'data' => '7TB @ 2x 10Gbe Network Ports',
                'benchmark' => 103492,
                'benchmark_percentage' => '90'
            ]

        ]);
    }

    public function valueServers()
    {
        return $this->state(function (array $attributes) {

            return [
                'category_id' => 7,
                'type' => 'value',
                'title' => 'Value',
            ];
        });
    }

    public function CloudServers()
    {
        return $this->state(function (array $attributes) {

            return [
                'category_id' => 2,
                'type' => 'cloud',
                'title' => 'cloud',
            ];
        });
    }


}
