<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    
    /**
     * showMatch show all matches
     *
     * @return void
     */
    public static function showMatches()
    {
        // $matches = DB::table('match')
        // ->join('match_results', 'match_id', '=', 'match.id')
        // ->select('match.id','division', 'date', 'home_team', 'away_team', 'home_score', 'away_score')
        // ->get();
        $matches = DB::table('match_results')
            ->join('match', 'match.id', '=', 'match_results.match_id')
            
            ->select('*')
            ->get();
            
        return $matches;
    }

    /**
     * showMatch - show indiviaual match from id
     *
     * @param  mixed $id
     *
     * @return void
     */
    public static function showMatch($id)
    {   
            
        $matches = DB::table('match_results')->where('match.id', $id)
            ->join('match', 'match.id', '=', 'match_results.match_id')
            ->join('rounds', 'rounds.id', '=', 'match.id')
            ->select('*')
            ->get();

        return $matches;
    }

    public static function getVenueName($id)
    {
        
    }
}
