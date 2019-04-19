<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Relationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //set the relationships
       
        Schema::table('player_games', function (Blueprint $table) {
            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('game_id')->references('id')->on('games');
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
    }
}
