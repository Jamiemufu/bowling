<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {   

        //Data needed for array
        //matchID
        // division
        // venue
        // date
        // home/away
        // logo
        // teamname
        // score
        // Player info
        $results = [
            ['match_id' => '1', 'team_played' => 'Random Team Name', 'home_away' => 'home', 'final_score' => '200', 'venue' => 'Wales', 'win' => 'W'],
            ['match_id' => '2', 'team_played' => 'Random Team again', 'home_away' => 'away', 'final_score' => '202', 'venue' => 'Wales', 'win' => 'W'],
            ['match_id' => '3', 'team_played' => 'Random Team more', 'home_away' => 'home', 'final_score' => '203', 'venue' => 'Wales', 'win' => 'W']
        ];

        return view('pages.home')->with('results', $results);
    }
}
