<?php

use Illuminate\Database\Seeder;

class SlothsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sloths')->insertGetId([
            'name' => 'Bobby',
            'birthday'=> '1996-04-10',
            'wives'=>2,
            'kids'=>3,
            'background'=>'A nice and funny sloth. Bobby likes chilling in the trees and doing nothing.',
        ]);
        
        DB::table('sloths')->insertGetId([
            'name' => 'Jimmy',
            'birthday'=> '1996-10-08',
            'wives'=>11,
            'kids'=>56,
            'background'=>'Happy Jimmy has a very active life. He likes travelling and partying but usually you can find him chilling on a tree and doing nothing.',
        ]);
    }
}
