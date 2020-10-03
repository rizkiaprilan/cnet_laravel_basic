<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 4; $i++) {
            $majority = $i + 1;
            DB::table('students')->insert([
            'name' => $faker->name,
            'address' => $faker->address,
            'majority_id' => $majority
            ]);
        }
    }
}
