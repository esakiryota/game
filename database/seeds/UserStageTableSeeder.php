<?php

use Illuminate\Database\Seeder;

class UserStageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user_stage')->insert([
         [
              'email' => 'demo@example.com',
              'math' => 1,
              'english' => 1
           ]
      ]);
    }
}
