<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class results extends Controller
{
    //
    public function viewResults() 
    {
        //create array to be used for main results page
        $latestMatch = [
            ['match_id' => '1', 'team_played' => 'Random Team Name', 'home_away' => 'home', 'final_score' => '200', 'venue' => 'Wales', 'win' => 'W'],
            ['match_id' => '2', 'team_played' => 'Random Team again', 'home_away' => 'away', 'final_score' => '202', 'venue' => 'Wales', 'win' => 'W'],
            ['match_id' => '3', 'team_played' => 'Random Team more', 'home_away' => 'home', 'final_score' => '203', 'venue' => 'Wales', 'win' => 'W']
        ];

        return view('pages.home')->with('latestMatch', $latestMatch);
    }
}
