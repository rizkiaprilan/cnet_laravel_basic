<?php

use Illuminate\Database\Seeder;

class DummyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'dimz',"umur" => '1'],
            ['name'=>'damz', "umur" => '2'],
            ['name'=>'dumz', "umur" => '3'],
            ['name'=>'demz', "umur" => '4'],
        ];

        foreach($data as $d){
            DB::table('dummy')->insert([
                'name' => $d['name'],
                'umur' => $d['umur'],
            ]);
        }
    }
}
