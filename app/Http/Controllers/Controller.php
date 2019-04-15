<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        // test data
        $matches = [
            // EXAMPLE
            [
                'match_id' => '1',
                'division' => 'Senior County 2014 Championship',
                'date' => '1st Jan 2019',
                'home_team' => 'Warwick & Worcester',
                'home_score' => '464',
                'away_team' => 'Wales',
                'away_score' => '434',
                'home_venue' => 'Moor Lane Bowling Club',
                'away_venue' => 'Esclusham Bowling Club'
            ],
            ['match_id' => '2','division' => 'Senior County 2013 Championship', 'date' => '2st Jan 2019','home_team' => 'Warwick & Worcester', 'home_score' => '434','away_team' => 'Coventry','away_score' => '454','home_venue' => 'Moor Lane Bowling Club', 'away_venue' => 'Esclusham Bowling Club']
        ];

        $venues = [
            [
                'venue_name' => 'Moor Lane Bowling Club',
                'homeaway' => 'home',
                'match_id' => '1'
            ]
        ];

        $players = [
            // EXAMPLE
            [
                'player_id' => '1',
                'player_name' => 'Ross Dunkley',
                'player_club' => 'King George V',
                'player_score' => '21',
                'player_homeaway' => 'home'
            ],
            ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'home'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'home'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'home'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'home'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'home'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'home'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'home'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'home'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'home'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'home'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'home'],
            [
                'player_id' => '1',
                'player_name' => 'Ross Dunkley',
                'player_club' => 'King George V',
                'player_score' => '21',
                'player_homeaway' => 'away'
            ],
            ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'away'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'away'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'away'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'away'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'away'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'away'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'away'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'away'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'away'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'away'], ['player_id' => '2', 'player_name' => 'Ross Dunkley', 'player_club' => 'King George V', 'player_score' => '21', 'player_homeaway' => 'away']
        ];
        //return view with matches
        return view('pages.home')->with('matches', $matches)->with('players', $players);
    }
}
