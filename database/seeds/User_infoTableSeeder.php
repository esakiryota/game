<?php

use Illuminate\Database\Seeder;

class User_infoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user_info')->insert([
         [
              'name'    => 'たいけん',
              'level' => 1,
              'atack' => 50,
              'defense' => 50,
              'character' => 'A',
              'experience' => 0,
              'email' => 'demo@example.com'
           ]
      ]);
      DB::table('user_info')->insert([
         [
              'name'    => '管理者',
              'level' => 1,
              'atack' => 50,
              'defense' => 50,
              'character' => 'A',
              'experience' => 0,
              'email' => 'esaki1217@gmail.com'
           ]
      ]);
    }
}
