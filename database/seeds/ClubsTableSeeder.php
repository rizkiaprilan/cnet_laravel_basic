<?php

use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'Cyber Security Club', 'description'=>'Learning Cyber Security'],
            ['name'=>'BinaNusantara Computer Club','description'=>'Learning code & analysis'],
            ['name'=>'Nippon Club','description'=>'Learning Japanese Culture'],
        ];

        foreach($data as $d){
            DB::table('clubs')->insert([
                'name' => $d['name'],
                'description'=> $d['description']
            ]);
        }
    }
}
