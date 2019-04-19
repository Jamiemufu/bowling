<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player_game extends Model
{

    /**
     * player - return player with Player_game on id
     *
     * @return void
     */
    public function player()
    {

        return $this->hasOne('App\Player', 'id');
        
    }

}
