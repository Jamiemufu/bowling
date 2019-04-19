<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Player_game;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
    * index - show rall macthes
    *
    * @return void
    */
    public function index()
    {

        //show match summary
        $games = \App\Game::all();
        
        //return view with all matches
        return view('pages.results')->with('games', $games);

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
        
        //get match from id
        $games = \App\Game::find($id)->get();
       
        //return players games WITH player function
        $player_games = \App\Player_game::with('player')
                        ->where('game_id', $id)
                        ->where('venue_played', 'Moor Lane Bowling Club')
                        ->get();

        //********************************************************************* */
        // TODO - AMEND DATABASE AND ADD VENUES AND ORGANISE GAME BETWEEN 2 VENUE  
        //********************************************************************** */

        return view('pages.view')
                ->with('games', $games)
                ->with('player_games', $player_games);

    }
}
