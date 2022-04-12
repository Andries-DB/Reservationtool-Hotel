<?php

namespace Database\Seeders;

use App\Models\Room;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for($i = 0; $i < 100; $i++)
        {
            $name = $faker->company();

            Room::create([
                'floor' => $faker->numberBetween(0,10),
                'name' => $name,
                'slug' => self::slugify($name),
                'description' => $faker->text,
                'src' => self::imageUrl(),
                'is_smokersroom' => $faker->boolean(),
                'has_balcony' => $faker->boolean(),
                'has_shower' => $faker->boolean(),
                'has_bath' => $faker->boolean(),
            ]);
        }
    }
    public static function imageUrl()
    {
        $width = rand(0,2000);
        $height = rand(0,2000);
        $baseUrl = "https://lorempixel.com/";
        $url = "{$width}/{$height}/";

        return $baseUrl . $url;
    }
    public static function slugify($text, string $divider = '-')
    {
      // replace non letter or digits by divider
      $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

      // transliterate
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

      // remove unwanted characters
      $text = preg_replace('~[^-\w]+~', '', $text);

      // trim
      $text = trim($text, $divider);

      // remove duplicate divider
      $text = preg_replace('~-+~', $divider, $text);

      // lowercase
      $text = strtolower($text);

      if (empty($text)) {
        return 'n-a';
      }

      return $text;
    }
}
