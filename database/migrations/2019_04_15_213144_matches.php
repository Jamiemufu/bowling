<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Matches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Table for matches
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('division');
            $table->date('match_date');
            $table->string('home_team');
            $table->string('home_score');
            $table->string('away_team');
            $table->string('away_score');
            $table->string('home_venue');
            $table->string('away_venue');
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
        //drop if exsists
        Schema::dropIfExists('matches');
    }
}
