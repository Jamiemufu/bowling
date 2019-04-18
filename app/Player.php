<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    public static function showPlayers($id)
    {
        $players = DB::table('player')->where('player_game.match_id', $id)
        ->join('player_game', 'player_game.player_id', '=', 'player.id')
        ->join('rounds', 'rounds.player_id', '=', 'player.id')
        ->select('*')
        ->get();

        return $players;
    }
}
