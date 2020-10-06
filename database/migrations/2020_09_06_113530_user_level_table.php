<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('user_level', function (Blueprint $table) {
          $table->bigIncrements('id');

          $table->integer('lv')
              ->comment('レベル');          // varchar 文字長 128
          $table->integer('experience')
              ->comment('経験値');          // int 符号なし

          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_level');
    }
}
