<?php

use Illuminate\Database\Seeder;

class StageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('stage')->insert(
        [
          'stagename' => "math",
          'name' => "たしざん",
          'level' => '1-1',
          'image' => '/img/enemy0.png',
          'stage_bg' => '/img/battle-back-snow.jpg',
          'url' => '/math/1-1',
          'experiment' => '100',
          'atack' => '1',
          'defense' => '0',
          'life' => '500',
          'stage_id' => '1',
        ]);
      DB::table('stage')->insert(
        [
          'stagename' => "math",
          'name' => "ひきざん",
          'level' => '1-2',
          'image' => '/img/enemy1.png',
          'stage_bg' => '/img/battle-back-snow.jpg',
          'url' => '/math/1-2',
          'experiment' => '100',
          'atack' => '1',
          'defense' => '0',
          'life' => '520',
          'stage_id' => '2',
        ]);
        DB::table('stage')->insert(
        [
          'stagename' => "math",
          'name' => "かけざん",
          'level' => '1-3',
          'image' => '/img/enemy2.png',
          'stage_bg' => '/img/battle-back-snow.jpg',
          'url' => '/math/1-3',
          'experiment' => '100',
          'atack' => '1',
          'defense' => '0',
          'life' => '540',
          'stage_id' => '3',
        ]);
        DB::table('stage')->insert(
        [
          'stagename' => "math",
          'name' => "わりざん",
          'level' => '1-4',
          'image' => '/img/enemy3.png',
          'stage_bg' => '/img/battle-back-snow.jpg',
          'url' => '/math/1-4',
          'experiment' => '100',
          'atack' => '1',
          'defense' => '0',
          'life' => '560',
          'stage_id' => '4',
        ]);
      DB::table('stage')->insert(
        [
          'stagename' => "math",
          'name' => "たしざん ２けた",
          'level' => '2-1',
          'image' => '/img/enemy4.png',
          'stage_bg' => '/img/battle-back-snow.jpg',
          'url' => '/math/2-1',
          'experiment' => '100',
          'atack' => '1',
          'defense' => '0',
          'life' => '600',
          'stage_id' => '5',
        ]);
      DB::table('stage')->insert(
        [
          'stagename' => "math",
          'name' => "ひきざん  ２けた",
          'level' => '2-2',
          'image' => '/img/enemy5.png',
          'stage_bg' => '/img/battle-back-snow.jpg',
          'url' => '/math/2-2',
          'experiment' => '100',
          'atack' => '1',
          'defense' => '0',
          'life' => '600',
          'stage_id' => '6',
        ]);
        DB::table('stage')->insert(
        [
          'stagename' => "math",
          'name' => "かけざん ２けた",
          'level' => '2-3',
          'image' => '/img/enemy6.png',
          'stage_bg' => '/img/battle-back-snow.jpg',
          'url' => '/math/2-3',
          'experiment' => '100',
          'atack' => '1',
          'defense' => '0',
          'life' => '700',
          'stage_id' => '7',
        ]);
        DB::table('stage')->insert(
        [
          'stagename' => "math",
          'name' => "わりざん ２けた",
          'level' => '2-4',
          'image' => '/img/enemy7.png',
          'stage_bg' => '/img/battle-back-snow.jpg',
          'url' => '/math/2-4',
          'experiment' => '100',
          'atack' => '1',
          'defense' => '0',
          'life' => '700',
          'stage_id' => '8',
        ]);
    }
}
