<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class order_data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        //
        DB::table('orders')->insert([
            'user_id' => 1,
            'item_id' => 10,
        ]);

        DB::table('orders')->insert([
            'user_id' => 1,
            'item_id' => 12,
        ]);

        DB::table('orders')->insert([
            'user_id' => 3,
            'item_id' => 13,
        ]);
    }
}
