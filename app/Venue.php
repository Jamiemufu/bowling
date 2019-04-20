<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{

    public function game()
    {

        return $this->belongsToMany('\App\Game', 'games');

    }
}
