<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /*$faker = Faker::create();
    	for($i = 0; $i < 10; $i++) {
            App\Lists::create([
                'item_name' => $faker->name,
                'store_name' => $faker->name,
                'total_item' => $faker->randomDigitNotNull,
                'item_price' => $faker->numberBetween($min = 100, $max = 900),
                'total_price' =>$faker->numberBetween($min = 1000, $max = 9000)
            ]);
        }*/
    }
}
