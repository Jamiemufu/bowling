<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $players = \App\Player::all();
        return view('pages.players.showPlayers')->with('players', $players);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.players.createPlayer');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $player = new \App\Player;
        $player->first_name=$request->input('first_name');
        $player->last_name=$request->input('last_name');
        $player->club=$request->input('club');
        $player->save();
        
        return redirect('/players')->with('status', "$player->first_name $player->last_name saved!");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $player = \App\Player::find($id);

        return view('pages.players.confirm')->with('player', $player);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $player = \App\Player::find($id);

        return view('pages.players.editPlayers')->with('player', $player);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $player = \App\Player::find($id);
        $player->delete();

        return redirect('/players')->with('status', 'Player Sucessfully deleted!');

    }

    /**
     * search - player search
     *
     * @param  mixed $request
     * @param  mixed $id
     *
     * @return void
     */
    public function search(Request $request)
    {

        $name = $request->input('search');

        $players = \App\Player::searchNames($name)->get();
        
        return view('pages.players.showPlayers')->with('players', $players);
        
    }

    public function data($id)
    {

        // TODO Select all from all player game where play ID = ID
        $data = \App\Player_game::where('player_id', 1)->with('player')->with('player_venue')->with('game')->first();

        dump($data->player->club);
        dump($data->player->first_name);
        dump($data->player->last_name);
        dump($data->round_played);
        dump($data->score);
        dump($data->home_away);
        dump($data->player_venue->name);

        dump($data); die;

    }
}
