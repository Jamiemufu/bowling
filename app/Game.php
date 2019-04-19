<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    /**
     * player_games - return player_games with Game
     *
     * @return void
     */
    public function player_games()
    {

        return $this->hasMany('\App\Player_Game');

    }

}
