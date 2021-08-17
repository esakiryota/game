<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('messages')) {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('message');
            $table->string('image');
            $table->string('stage');
            $table->string('speaker');
            $table->timestamps();
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('messages');
    }
}
