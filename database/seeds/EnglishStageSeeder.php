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
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "はじまりのきし 1",'level' => '1-1',
        'image' => '/img/enemy0.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-1', 'experiment' => '100','atack' => '0','defense' => '1',
        'life' => '500','stage_id' => '1',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "はじまりのきし 2",'level' => '1-2',
        'image' => '/img/enemy1.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-2', 'experiment' => '100','atack' => '0','defense' => '1',
        'life' => '510','stage_id' => '2',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "はじまりのきし 3",'level' => '1-3',
        'image' => '/img/enemy2.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-3', 'experiment' => '100','atack' => '0','defense' => '1',
        'life' => '550','stage_id' => '3',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "はじまりのきし 4",'level' => '1-4',
        'image' => '/img/enemy3.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-4', 'experiment' => '100','atack' => '0','defense' => '1',
        'life' => '570','stage_id' => '4',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "はじまりのきし 5",'level' => '1-5',
        'image' => '/img/enemy4.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-5', 'experiment' => '100','atack' => '0','defense' => '1',
        'life' => '590','stage_id' => '5',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "あさいおき １",'level' => '1-6',
        'image' => '/img/enemy5.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-6', 'experiment' => '100','atack' => '1','defense' => '1',
        'life' => '600','stage_id' => '6',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "あさいおき ２",'level' => '1-7',
        'image' => '/img/enemy6.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-7', 'experiment' => '100','atack' => '1','defense' => '1',
        'life' => '620','stage_id' => '7',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "あさいおき ３",'level' => '1-8',
        'image' => '/img/enemy7.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-8', 'experiment' => '100','atack' => '1','defense' => '2',
        'life' => '650','stage_id' => '8',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "あさいおき ４",'level' => '1-9',
        'image' => '/img/enemy8.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-9', 'experiment' => '100','atack' => '1','defense' => '2',
        'life' => '650','stage_id' => '9',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "あさいおき ５",'level' => '1-10',
        'image' => '/img/enemy9.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-10', 'experiment' => '100','atack' => '1','defense' => '3',
        'life' => '700','stage_id' => '10',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "とちゅうのことう　１",'level' => '1-11',
        'image' => '/img/enemy10.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-11', 'experiment' => '100','atack' => '2','defense' => '3',
        'life' => '700','stage_id' => '11',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "とちゅうのことう　２",'level' => '1-12',
        'image' => '/img/enemy11.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-12', 'experiment' => '100','atack' => '2','defense' => '3',
        'life' => '700','stage_id' => '12',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "とちゅうのことう　３",'level' => '1-13',
        'image' => '/img/enemy12.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-13', 'experiment' => '100','atack' => '2','defense' => '3',
        'life' => '700','stage_id' => '13',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "とちゅうのことう　４",'level' => '1-14',
        'image' => '/img/enemy13.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-14', 'experiment' => '100','atack' => '2','defense' => '3',
        'life' => '700','stage_id' => '14',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "とちゅうのことう　５",'level' => '1-15',
        'image' => '/img/enemy14.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-15', 'experiment' => '100','atack' => '2','defense' => '3',
        'life' => '750','stage_id' => '15',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "しまのちかく １",'level' => '1-16',
        'image' => '/img/enemy15.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-16', 'experiment' => '100','atack' => '3','defense' => '3',
        'life' => '750','stage_id' => '16',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "しまのちかく ２",'level' => '1-17',
        'image' => '/img/enemy16.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-17', 'experiment' => '100','atack' => '3','defense' => '4',
        'life' => '800','stage_id' => '17',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "しまのちかく ３",'level' => '1-18',
        'image' => '/img/enemy17.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-18', 'experiment' => '100','atack' => '3','defense' => '4',
        'life' => '810','stage_id' => '18',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "しまのちかく ４",'level' => '1-19',
        'image' => '/img/enemy18.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-19', 'experiment' => '100','atack' => '3','defense' => '4',
        'life' => '810','stage_id' => '19',]);
      DB::table('english_stage')->insert(['stagename' => "english",'name' => "しまにとうちゃく",'level' => '1-20',
        'image' => '/img/enemy19.png','stage_bg' => '/img/battle-back-marin.jpg',
        'url' => '/english/1-20', 'experiment' => '100','atack' => '3','defense' => '4',
        'life' => '820','stage_id' => '20',]);
    }
}
