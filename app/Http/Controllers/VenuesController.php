<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenuesController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        //show venues
        $venues = \App\Venue::all();
        return view('pages.venues.showVenues')->with('venues', $venues);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
        return view('pages.venues.createVenues');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        //
        $venue = new \App\Venue;
        $venue->name=$request->input('venue_name');
        $venue->save();
        //redirect to get request on venues/
        return redirect('venues/')->with('status', "$venue->name saved!");
        
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        //add sure to delete here
        $venue = \App\Venue::find($id);

        return view('pages.venues.confirm')->with('venue', $venue);
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $venue = \App\Venue::find($id);
        
        return view('pages.venues.editVenues')->with('venue', $venue);
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
        //
        $venue = \App\Venue::find($id);
        $venue->delete();
        return redirect('venues/')->with('status', "Venue sucessfully deleted!");
    }
}
