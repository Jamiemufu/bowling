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
        // test data
        $matches = \App\matches::all();
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
    public function show($id) {
        //where match_id = id show all
        $matches = \App\matches::where('id', $id)->get();

        $players = \App\players::where('match_id', $id)->get();

        return view('pages.view')->with('matches', $matches)->with('players', $players);
    }
}
