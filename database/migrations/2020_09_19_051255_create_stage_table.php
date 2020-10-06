<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('stagename');
            $table->string('name');
            $table->string('level');
            $table->string('image');
            $table->string('stage_bg');
            $table->string('url');
            $table->integer('experiment');
            $table->integer('atack');
            $table->integer('defense');
            $table->integer('life');
            $table->integer('stage_id');
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
        Schema::dropIfExists('stage');
    }
}
