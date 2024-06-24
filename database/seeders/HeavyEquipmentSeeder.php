<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeavyEquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipments = [
            [
                'name' => 'Excavator',
                'image' => 'excavator.jpg',
                'rental_price' => 1000000,
                'operator_price' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bulldozer',
                'image' => 'bulldozer.jpg',
                'rental_price' => 1500000,
                'operator_price' => 600000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Crane',
                'image' => 'crane.jpg',
                'rental_price' => 2000000,
                'operator_price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Loader',
                'image' => 'loader.jpg',
                'rental_price' => 1200000,
                'operator_price' => 550000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dump Truck',
                'image' => 'dump_truck.jpg',
                'rental_price' => 800000,
                'operator_price' => 400000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        \App\Models\HeavyEquipment::insert($equipments);
    }
}
