<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClubStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 10; $i++) {
            DB::table('club_student')->insert([
                'student_id' => $faker->numberBetween($min = 1, $max = 4),
                'club_id' => $faker->numberBetween($min = 1, $max = 3)
            ]);
        }
    }
}
