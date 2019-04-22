<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
    * index - show all games
    *
    * @return void
    */
    public function index()
    {

        //show games from model
        $games = \App\Game::all();
        
        //return view with all games
        return view('pages.home')->with('games', $games);

    }

    /**
    * show game AND player_games of slug
    *
    * @param  mixed $id
    *
    * @return void
    */
    public function show($id) 
    {
        
        //get game from id
        $games = \App\Game::find($id)->with('home_venue_name')->with('away_venue_name')->get();

        //split collection and save home_venue and away vebue
        foreach($games as $game)
        {
             $home = $game->home_venue;
             $away = $game->away_venue;
        }

        //HOME VENUE players games WITH player from model for game ID
        $home_games = \App\Player_game::with('player')
                        ->with('player_venue')
                        ->where('game_id', $id)
                        ->where('venue_played', $home)
                        ->get();

        //AWAY VENUE and players games WITH player function for game ID
        $away_games = \App\Player_game::with('player')
                        ->with('player_venue')
                        ->where('game_id', $id)
                        ->where('venue_played', $away)
                        ->get();

        //return view with collections
        return view('pages.gameInfo')
                ->with('games', $games)
                ->with('home_games', $home_games)
                ->with('away_games', $away_games);

    }
}
