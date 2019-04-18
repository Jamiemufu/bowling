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
     * index - show rall macthes
     *
     * @return void
     */
    public function index()
    {
        //show match summary
        $matches = \App\matches::showMatch();
        
        //return view with all matches
        return view('pages.results')->with('matches', $matches);
    }

    /**
     * show match of id
     *
     * @param  mixed $id
     *
     * @return void
     */
    public function show($id) 
    {
        //show match summary
        $matches = \App\matches::showMatch();

        //populate player information
        $players = \App\players::showPlayers();

        return view('pages.view')->with('matches', $matches)->with('players', $players);
    }
}
