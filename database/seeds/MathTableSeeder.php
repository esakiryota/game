<?php

use Illuminate\Database\Seeder;

class MathTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 50; $i++) {
        $left = rand(1, 9);
        $right = rand(1, 9);
        $answer = $left + $right;
        $left_right = "$left + $right =";
        DB::table('math_question')->insert(['q' => $left_right,'a' => $answer,'level' => "1-1"]);
      }

      for ($i=0; $i < 50; $i++) {
        $left = rand(1, 9);
        $right = rand(1, $left);
        $answer = $left - $right;
        $left_right = "$left - $right =";
        DB::table('math_question')->insert(['q' => $left_right,'a' => $answer,'level' => "1-2"]);
      }

      for ($i=0; $i < 50; $i++) {
        $left = rand(1, 9);
        $right = rand(1, 9);
        $answer = $left*$right;
        $left_right = "$left × $right =";
        DB::table('math_question')->insert(['q' => $left_right,'a' => $answer,'level' => "1-3"]);
      }

      for ($i=0; $i < 50; $i++) {
        $left = rand(1, 9);
        $right = rand(1, 9);
        $answer = $left*$right;
        $left_right = "$answer ÷ $right =";
        DB::table('math_question')->insert(['q' => $left_right,'a' => $left,'level' => "1-4"]);
      }

      for ($i=0; $i < 50; $i++) {
        $left = rand(10, 99);
        $right = rand(10, 99);
        $answer = $left + $right;
        $left_right = "$left + $right =";
        DB::table('math_question')->insert(['q' => $left_right,'a' => $answer,'level' => "2-1"]);
      }

      for ($i=0; $i < 50; $i++) {
        $left = rand(10, 99);
        $right = rand(10, $left);
        $answer = $left - $right;
        $left_right = "$left - $right =";
        DB::table('math_question')->insert(['q' => $left_right,'a' => $answer,'level' => "2-2"]);
      }

      for ($i=0; $i < 50; $i++) {
        $left = rand(1, 9);
        $right = rand(10, 49);
        $answer = $left*$right;
        $left_right = "$left × $right =";
        DB::table('math_question')->insert(['q' => $left_right,'a' => $answer,'level' => "2-3"]);
      }

      for ($i=0; $i < 50; $i++) {
        $left = rand(10, 49);
        $right = rand(1, 9);
        $answer = $left*$right;
        $left_right = "$answer ÷ $right =";
        DB::table('math_question')->insert(['q' => $left_right,'a' => $left,'level' => "2-4"]);
      }
    }
}
