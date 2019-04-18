<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MatchResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //match_results
        Schema::create('match_results', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('home_score');
            $table->unsignedInteger('away_score');
            $table->unsignedInteger('match_id');
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
        Schema::dropIfExists('match_results');
    }
}
