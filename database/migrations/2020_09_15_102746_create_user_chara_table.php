<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCharaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_chara', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('chara')->comment('キャラ');
            $table->integer('level')->comment('レベル');
            $table->string('image')->comment('イメージurl');
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
        Schema::dropIfExists('user_chara');
    }
}
