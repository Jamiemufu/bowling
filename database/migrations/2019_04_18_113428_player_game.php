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
        //player_game
        Schema::create('player_games', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('score');
            $table->string('home_away');
            $table->unsignedInteger('round_played');
            $table->unsignedInteger('venue_played');
            $table->unsignedInteger('game_id');
            $table->unsignedInteger('player_id');
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
        Schema::dropIfExists('player_games');
    }
}
