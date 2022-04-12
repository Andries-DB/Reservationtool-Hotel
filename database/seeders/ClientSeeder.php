<?php

namespace Database\Seeders;

use App\Models\Client;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
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
            Client::create([
                'adress_id' => $faker->numberBetween(0,100),
                'title' => $faker->title('male'|'female'),
                'firstname' => $faker->firstName('male'|'female'),
                'lastname' => $faker->lastName('male'|'female'),
                'email' => $faker->email()
            ]);
        }
    }
}
