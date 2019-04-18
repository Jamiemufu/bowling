<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class matches extends Model
{
    //
    public static function showMatch()
    {
        $matches = DB::table('matches')
        ->join('matchResults', 'match_id', '=', 'matches.id')
        ->select('matches.id','division', 'date', 'home_team', 'away_team', 'home_score', 'away_score')
        ->get();

        return $matches;
    }
}
