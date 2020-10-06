<?php

use Illuminate\Database\Seeder;

class EnglishStageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "つき",'level' => '1-1',
        'image' => '/img/enemy0.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-1', 'experiment' => '100','atack' => '0','defense' => '1',
        'life' => '500','stage_id' => '1',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "ようび・きせつ",'level' => '1-2',
        'image' => '/img/enemy1.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-2', 'experiment' => '100','atack' => '0','defense' => '1',
        'life' => '510','stage_id' => '2',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "じかん",'level' => '1-3',
        'image' => '/img/enemy2.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-3', 'experiment' => '100','atack' => '0','defense' => '1',
        'life' => '550','stage_id' => '3',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "かぞく・いえ １",'level' => '1-4',
        'image' => '/img/enemy3.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-4', 'experiment' => '100','atack' => '0','defense' => '1',
        'life' => '570','stage_id' => '4',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "かぞく・いえ ２",'level' => '1-5',
        'image' => '/img/enemy4.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-5', 'experiment' => '100','atack' => '0','defense' => '1',
        'life' => '590','stage_id' => '5',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "のりもの・すぽーつ",'level' => '1-6',
        'image' => '/img/enemy5.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-6', 'experiment' => '100','atack' => '0','defense' => '1',
        'life' => '600','stage_id' => '6',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "おんがく・たべもの・くに",'level' => '1-7',
        'image' => '/img/enemy6.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-7', 'experiment' => '100','atack' => '0','defense' => '1',
        'life' => '620','stage_id' => '7',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "がっこう・いっぱん",'level' => '1-8',
        'image' => '/img/enemy7.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-8', 'experiment' => '100','atack' => '0','defense' => '1',
        'life' => '650','stage_id' => '8',]);
    }
}
