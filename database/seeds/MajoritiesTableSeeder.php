<?php

use Illuminate\Database\Seeder;

class MajoritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'Computer Science','faculty_id'=>1],
            ['name'=>'Cyber Security','faculty_id'=>1],
            ['name'=>'Information Systems','faculty_id'=>2],
            ['name'=>'Information Systems Accounting & Auditing','faculty_id'=>2],
            ['name'=>'Computer Engineering','faculty_id'=>3],
            ['name'=>'Industrial Engineering','faculty_id'=>3],
            ['name'=>'Bussiness Law','faculty_id'=>4],
            ['name'=>'Psychology','faculty_id'=>4],
        ];

        foreach($data as $d){
            DB::table('majorities')->insert([
                'name' => $d['name'],
                'faculty_id' => $d['faculty_id']
            ]);
        }
    }
}
