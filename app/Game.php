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

    public function home_venue_name()
    {

        return $this->hasOne('\App\Venue', 'id', 'home_venue');

    }

    public function away_venue_name()
    {

        return $this->hasOne('\App\Venue', 'id', 'away_venue');

    }

}
