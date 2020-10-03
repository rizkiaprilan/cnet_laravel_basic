<?php

use Illuminate\Database\Seeder;

class CreditsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Bank BCA', 'balance' => 69000000, 'card_id' => 1],
            ['name' => 'Bank Mandiri', 'balance' => 50000000, 'card_id' => 2],
            ['name' => 'Bank BNI', 'balance' => 43000000, 'card_id' => 3],
            ['name' => 'Bank BRI', 'balance' => 32000000, 'card_id' => 4],
        ];

        foreach($data as $d){
            DB::table('credits')->insert([
                'name' => $d['name'],
                'balance'=> $d['balance'],
                'card_id'=> $d['card_id']
            ]);
        }
    }
}
