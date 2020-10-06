<?php

use Illuminate\Database\Seeder;

class MainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('main')->insert(
        [
          'bg_image' => "/img/danjon1_bg.jpeg",
          'stagename' => "math",
          'name' => 'さんすうのゆきやま',
        ]);
        DB::table('main')->insert(
        [
          'bg_image' => "/img/start-bg-marin.jpg",
          'stagename' => "english",
          'name' => 'えいごのうみ',
        ]
      );
    }
}
