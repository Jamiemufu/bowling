<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlayerGame extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('player_game', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('player_score');
            $table->unsignedInteger('match_id');
            $table->unsignedInteger('player_id');
            $table->foreign('match_id')->references('id')->on('matches');
            // $table->foreign('player_id')->references('id')->on('players');
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
        Schema::dropIfExists('player_game');
    }
}
