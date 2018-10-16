<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ForumsTableSeeder extends Seeder
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
          DB::table('forums')->insert([
            'title' => str_random(10),
            'description' => $faker->text,
          ]);
        }
    }
}
