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
        Schema::table('player_game', function (Blueprint $table) {
            $table->foreign('player_id')->references('id')->on('player');
            $table->foreign('match_id')->references('id')->on('match');
        });

        Schema::table('match_results', function (Blueprint $table) {
            $table->foreign('match_id')->references('id')->on('match');
        });

        Schema::table('rounds', function (Blueprint $table) {
            $table->foreign('match_id')->references('id')->on('match');
            $table->foreign('player_id')->references('id')->on('player');
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
