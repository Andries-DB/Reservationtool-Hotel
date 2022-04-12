<?php

namespace Database\Seeders;

use App\Models\SeasonalPrice;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonalPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            SeasonalPrice::create([
                'price_factor' => rand(0,100),
            ]);
        }
    }
}
