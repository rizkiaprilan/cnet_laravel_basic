<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DummyTableSeeder::class,
            FacultiesTableSeeder::class,
            MajoritiesTableSeeder::class,
            StudentsTableSeeder::class,
            CardsTableSeeder::class,
            CreditsTableSeeder::class,
            ClubsTableSeeder::class,
            ClubStudentSeeder::class,
        ]);
    }
}
