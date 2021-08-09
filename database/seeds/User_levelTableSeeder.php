<?php

use Illuminate\Database\Seeder;

class User_levelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_level')->insert(['lv' => "1",'experience' => '500']);
        DB::table('user_level')->insert(['lv' => "2",'experience' => '500']);
        DB::table('user_level')->insert(['lv' => "3",'experience' => '500']);
        DB::table('user_level')->insert(['lv' => "4",'experience' => '500']);
        DB::table('user_level')->insert(['lv' => "5",'experience' => '500']);
        DB::table('user_level')->insert(['lv' => "6",'experience' => '1000']);
        DB::table('user_level')->insert(['lv' => "7",'experience' => '1000']);
        DB::table('user_level')->insert(['lv' => "8",'experience' => '1000']);
        DB::table('user_level')->insert(['lv' => "9",'experience' => '1000']);
        DB::table('user_level')->insert(['lv' => "10",'experience' => '1000']);
        DB::table('user_level')->insert(['lv' => "11",'experience' => '1500']);
        DB::table('user_level')->insert(['lv' => "12",'experience' => '1500']);
        DB::table('user_level')->insert(['lv' => "13",'experience' => '1500']);
        DB::table('user_level')->insert(['lv' => "14",'experience' => '1500']);
        DB::table('user_level')->insert(['lv' => "16",'experience' => '1800']);
        DB::table('user_level')->insert(['lv' => "17",'experience' => '1800']);
        DB::table('user_level')->insert(['lv' => "18",'experience' => '2000']);
        DB::table('user_level')->insert(['lv' => "19",'experience' => '2000']);
        DB::table('user_level')->insert(['lv' => "20",'experience' => '3000']);
    }
}
