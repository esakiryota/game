<?php

use Illuminate\Database\Seeder;

class Last_stagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('last_stages')->insert(['stagename' => "last",'name' => "さいごのしま 1",'level' => '1-1',
        'image' => '/img/last/enemy_1.png','stage_bg' => '/img/last_bg.png',
        'url' => '/last/1-1', 'experiment' => '700','atack' => '5','defense' => '5',
        'life' => '1000','stage_id' => '1',]);
      DB::table('last_stages')->insert(['stagename' => "last",'name' => "さいごのしま 2",'level' => '1-2',
        'image' => '/img/last/enemy_2.png','stage_bg' => '/img/last_bg.png',
        'url' => '/last/1-2', 'experiment' => '800','atack' => '5','defense' => '5',
        'life' => '1000','stage_id' => '2',]);
      DB::table('last_stages')->insert(['stagename' => "last",'name' => "さいごのしま 3",'level' => '1-3',
        'image' => '/img/last/enemy_3.png','stage_bg' => '/img/last_bg.png',
        'url' => '/last/1-3', 'experiment' => '700','atack' => '5','defense' => '5',
        'life' => '1000','stage_id' => '3',]);
    }
}
