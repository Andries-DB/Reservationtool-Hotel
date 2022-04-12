<?php

namespace Database\Seeders;

use App\Models\Adress;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++) {
            Adress::create([
                'street' => substr($faker->streetAddress(), 2),
                'zipcode' => $faker->postcode(),
                'city' => $faker->city(),
                'province' => $faker->state(),
                'country_code' => $faker->country()
            ]);
        }
    }
}
