<?php

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data = [
        //     ['nim' => '2101696153', 'balance' => 1000000, 'student_id' => 1],
        //     ['nim' => '2101696154', 'balance' => 5000000, 'student_id' => 2],
        //     ['nim' => '2101696155', 'balance' => 4000000, 'student_id' => 3],
        //     ['nim' => '2101696156', 'balance' => 3000000, 'student_id' => 4],
        // ];

        $data = [
            ['nim' => '2101696153', 'balance' => 1000000],
            ['nim' => '2101696154', 'balance' => 5000000],
            ['nim' => '2101696155', 'balance' => 4000000],
            ['nim' => '2101696156', 'balance' => 3000000],
        ];

        foreach($data as $d){
            DB::table('cards')->insert([
                'nim' => $d['nim'],
                'balance'=> $d['balance'],
            ]);
        }

        // foreach($data as $d){
        //     DB::table('cards')->insert([
        //         'nim' => $d['nim'],
        //         'balance'=> $d['balance'],
        //         'student_id'=> $d['student_id']
        //     ]);
        // }
    }
}
