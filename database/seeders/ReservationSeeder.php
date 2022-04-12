<?php

namespace Database\Seeders;
use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
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
            Reservation::create([
                'user_id' => $faker->randomDigitNot(0,2,3,4,5,6,7,8,9),
                'client_id' => $faker->numberBetween(1, 100),
                'room_id' => $faker->numberBetween(1, 100),
                'seasonal_price_id' => $faker->numberBetween(0, 100),
                'remarks' => $faker->text,
                'price' => $faker->randomFloat(2, 100, 130),
                'date_start' => $faker->dateTimeBetween('-1 week', '+1 week'),
                'date_end' => $faker->dateTimeBetween('+1 week', '+3 weeks'),
            ]);
        }
    }
}
