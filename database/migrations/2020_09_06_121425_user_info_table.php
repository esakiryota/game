<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('user_info', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->integer('level')
              ->comment('レベル');          // varchar 文字長 128
          $table->integer('atack')
              ->comment('こうげき');          // int 符号なし
          $table->integer('defense')
              ->comment('ぼうぎょ');          // int 符号なし
          $table->string('character')
              ->comment('キャラ');          // int 符号なし
          $table->string('experience')
              ->comment('経験値');          // int 符号なし
          $table->string('email')
              ->comment('メールアドレス');          // int 符号なし
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
