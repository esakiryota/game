<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert(['image' => '/img/skills/1', 'damage' => '150', 'context' => '', 'name' => 'フリーズ', 'rare' => '2']);
        DB::table('skills')->insert(['image' => '/img/skills/2', 'damage' => '150', 'context' => '', 'name' => 'サンダー', 'rare' => '2']);
        DB::table('skills')->insert(['image' => '/img/skills/3', 'damage' => '300', 'context' => '', 'name' => '雷撃', 'rare' => '4']);
        DB::table('skills')->insert(['image' => '/img/skills/4', 'damage' => '300', 'context' => '', 'name' => '赤白の光', 'rare' => '4']);
        DB::table('skills')->insert(['image' => '/img/skills/5', 'damage' => '250', 'context' => '', 'name' => '火炎ビーム', 'rare' => '3']);
        DB::table('skills')->insert(['image' => '/img/skills/6', 'damage' => '350', 'context' => '', 'name' => 'ジ・エンド', 'rare' => '5']);
        DB::table('skills')->insert(['image' => '/img/skills/7', 'damage' => '100', 'context' => '', 'name' => 'きあいなぐり', 'rare' => '1']);
        DB::table('skills')->insert(['image' => '/img/skills/8', 'damage' => '150', 'context' => '', 'name' => '二段なぐり', 'rare' => '2']);
        DB::table('skills')->insert(['image' => '/img/skills/9', 'damage' => '200', 'context' => '', 'name' => '四段なぐり', 'rare' => '3']);
        DB::table('skills')->insert(['image' => '/img/skills/10', 'damage' => '200', 'context' => '', 'name' => 'なぐりおろし', 'rare' => '3']);
        DB::table('skills')->insert(['image' => '/img/skills/11', 'damage' => '200', 'context' => '', 'name' => '回しなぐり', 'rare' => '3']);
        DB::table('skills')->insert(['image' => '/img/skills/12', 'damage' => '250', 'context' => '', 'name' => 'たこなぐり', 'rare' => '4']);
        DB::table('skills')->insert(['image' => '/img/skills/13', 'damage' => '150', 'context' => '', 'name' => 'きあい切り', 'rare' => '2']);
        DB::table('skills')->insert(['image' => '/img/skills/14', 'damage' => '200', 'context' => '', 'name' => 'みだれ切り', 'rare' => '3']);
        DB::table('skills')->insert(['image' => '/img/skills/15', 'damage' => '300', 'context' => '', 'name' => '閃光切り', 'rare' => '4']);
        DB::table('skills')->insert(['image' => '/img/skills/16', 'damage' => '250', 'context' => '', 'name' => '切り落とし', 'rare' => '3']);
        DB::table('skills')->insert(['image' => '/img/skills/17', 'damage' => '250', 'context' => '', 'name' => 'チャクラム', 'rare' => '3']);
        DB::table('skills')->insert(['image' => '/img/skills/18', 'damage' => '300', 'context' => '', 'name' => '空間切り', 'rare' => '4']);
    }
}
