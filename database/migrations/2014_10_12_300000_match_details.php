<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MatchDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('matchResults', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('home_score');
            $table->unsignedInteger('away_score');
            $table->unsignedInteger('match_id');
            $table->foreign('match_id')->references('id')->on('matches');
            // $table->unsignedInteger('home_venue')->references('id')->on('venues');
            // $table->unsignedInteger('away_venue')->references('id')->on('venues');
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
        Schema::dropIfExists('matchResults');
    }
}
