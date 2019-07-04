<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class user_data_dump extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('tbl_customer')->insert([
            'name' => Str::random(5),
            'email'=>Str::random(5).'@gmail.com',
            'age'=>Str::random(2),
        ]);

    }
}
