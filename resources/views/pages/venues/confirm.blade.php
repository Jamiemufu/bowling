@extends('layouts.default')

@section('content')

<div class="create-venue-container">

    <div class="venue-box">

        <div class="venue-header">
            <h1>Delete Venue</h1>
        </div>
        
        
        <div class="venue-delete">
            <form method="post" action="{{ action('VenuesController@destroy', $venue->id) }}">
                @csrf
                @method('delete')

                <div class="venue-name">
                    <p>Are you sure you want to delete {{$venue->name}}</p>
                </div>


                <div class="venue-delete">
                    <button type="submit">Delete</button></li>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection