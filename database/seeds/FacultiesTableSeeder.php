<?php

use Illuminate\Database\Seeder;

class FacultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'School of Computer Science',"code" => 'SoCS'],
            ['name'=>'School of Information Systems', "code" => 'SoIS'],
            ['name'=>'Faculty of Engineering', "code" => 'FoE'],
            ['name'=>'Faculty of Humanities', "code" => 'FoH'],
        ];

        foreach($data as $d){
            DB::table('faculties')->insert([
                'name' => $d['name'],
                'code' => $d['code'],
            ]);
        }
    }
}
