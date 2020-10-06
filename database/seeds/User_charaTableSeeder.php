<?php

use Illuminate\Database\Seeder;

class User_charaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user_chara')->insert(['chara' => "A",'level' => '1','image' => '/img/chara1.gif']);
      DB::table('user_chara')->insert(['chara' => "A",'level' => '2','image' => '/img/chara1.gif']);
      DB::table('user_chara')->insert(['chara' => "A",'level' => '3','image' => '/img/chara1.gif']);
      DB::table('user_chara')->insert(['chara' => "A",'level' => '4','image' => '/img/chara1.gif']);
      DB::table('user_chara')->insert(['chara' => "A",'level' => '5','image' => '/img/chara1.gif']);
      DB::table('user_chara')->insert(['chara' => "A",'level' => '6','image' => '/img/chara1.gif']);
      DB::table('user_chara')->insert(['chara' => "A",'level' => '7','image' => '/img/chara1.gif']);
      DB::table('user_chara')->insert(['chara' => "A",'level' => '8','image' => '/img/chara1.gif']);
      DB::table('user_chara')->insert(['chara' => "A",'level' => '9','image' => '/img/chara1.gif']);
      DB::table('user_chara')->insert(['chara' => "A",'level' => '10','image' => '/img/chara1.gif']);

      DB::table('user_chara')->insert(['chara' => "B",'level' => '1','image' => '/img/chara2.gif']);
      DB::table('user_chara')->insert(['chara' => "B",'level' => '2','image' => '/img/chara2.gif']);
      DB::table('user_chara')->insert(['chara' => "B",'level' => '3','image' => '/img/chara2.gif']);
      DB::table('user_chara')->insert(['chara' => "B",'level' => '4','image' => '/img/chara2.gif']);
      DB::table('user_chara')->insert(['chara' => "B",'level' => '5','image' => '/img/chara2.gif']);
      DB::table('user_chara')->insert(['chara' => "B",'level' => '6','image' => '/img/chara2.gif']);
      DB::table('user_chara')->insert(['chara' => "B",'level' => '7','image' => '/img/chara2.gif']);
      DB::table('user_chara')->insert(['chara' => "B",'level' => '8','image' => '/img/chara2.gif']);
      DB::table('user_chara')->insert(['chara' => "B",'level' => '9','image' => '/img/chara2.gif']);
      DB::table('user_chara')->insert(['chara' => "B",'level' => '10','image' => '/img/chara2.gif']);

      DB::table('user_chara')->insert(['chara' => "C",'level' => '1','image' => '/img/chara0.gif']);
      DB::table('user_chara')->insert(['chara' => "C",'level' => '2','image' => '/img/chara0.gif']);
      DB::table('user_chara')->insert(['chara' => "C",'level' => '3','image' => '/img/chara0.gif']);
      DB::table('user_chara')->insert(['chara' => "C",'level' => '4','image' => '/img/chara0.gif']);
      DB::table('user_chara')->insert(['chara' => "C",'level' => '5','image' => '/img/chara0.gif']);
      DB::table('user_chara')->insert(['chara' => "C",'level' => '6','image' => '/img/chara0.gif']);
      DB::table('user_chara')->insert(['chara' => "C",'level' => '7','image' => '/img/chara0.gif']);
      DB::table('user_chara')->insert(['chara' => "C",'level' => '8','image' => '/img/chara0.gif']);
      DB::table('user_chara')->insert(['chara' => "C",'level' => '9','image' => '/img/chara0.gif']);
      DB::table('user_chara')->insert(['chara' => "C",'level' => '10','image' => '/img/chara0.gif']);
    }
}
