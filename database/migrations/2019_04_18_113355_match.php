<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Match extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Table for match
        Schema::create('match', function (Blueprint $table) {
            $table->increments('id');
            $table->string('division');
            $table->string('date');
            $table->string('home_team');
            $table->string('away_team');
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
        Schema::dropIfExists('match');
    }
}
