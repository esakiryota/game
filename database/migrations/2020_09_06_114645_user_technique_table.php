<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTechniqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('user_technique', function (Blueprint $table) {
          $table->bigIncrements('id');

          $table->string('user_feature')
              ->comment('特徴');          // varchar 文字長 128
          $table->string('image')
              ->comment('イメージ');          // varchar 文字長 128
          $table->integer('level')
              ->comment('レベル');          // int 符号なし
          $table->string('technique')
              ->comment('技名');          // int 符号なし
          $table->integer('damage')
              ->comment('ダメージ');

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
        Schema::dropIfExists('user_technique');
    }
}
