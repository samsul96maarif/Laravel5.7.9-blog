<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 5; $i++) {
          DB::table('banners')->insert([
            'image' => $faker->name,
            'name' => $faker->name,
            'description' => $faker->text,
          ]);
        }
    }
}
