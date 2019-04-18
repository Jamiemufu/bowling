<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class players extends Model
{
    public static function showPlayers()
    {
        $players = DB::table('players')
        ->join('player_game', 'player_id', '=', 'players.id')
        ->join('matches', 'player_game.match_id', '=', 'matches.id')
        ->select('players.id', 'player_score', 'match_id', 'first_name', 'last_name', 'club')
        ->get();

        return $players;
    }
}
