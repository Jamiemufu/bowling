<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Players extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create players database
        Schema::create('players', function(Blueprint $table) {
            $table->increments('id');
            $table->string('player_name');
            $table->string('player_club');
            $table->string('player_homeaway');
            $table->timestamps();
            $table->integer('match_id')->references('id')->on('matches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::dropIfExists('players');
    }
}
