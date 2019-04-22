@extends('layouts.default')

@section('content')

<div class="create-players-container">

    <div class="players-box">

        <div class="players-header confirm">
            <h1>Delete Player</h1>
        </div>
        
        
        <div class="players-delete">
            <form method="post" action="{{ action('PlayersController@destroy', $player->id) }}">
                @csrf
                @method('delete')

                <div class="players-name">
                    <p>Are you sure you want to delete {{$player->first_name}} {{$player->last_name}}</p>
                </div>


                <div class="players-delete confirm">
                    <button type="submit">Delete</button></li>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection