<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rounds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('rounds', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("1")->nullable();
            $table->unsignedInteger("2")->nullable();
            $table->unsignedInteger("3")->nullable();
            $table->unsignedInteger("4")->nullable();
            $table->unsignedInteger("5")->nullable();
            $table->unsignedInteger("6")->nullable();
            $table->unsignedInteger('player_id');
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
    }
}
