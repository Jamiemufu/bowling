@extends('layouts.default')

@section('content')

<div class="create-players-container">

    <div class="players-box">

        <div class="players-header">
            <h1>Edit Player</h1>
        </div>
        
        
        <div class="players-lists">

            <div class="players-name">

                <ul>
                    <li class="playerss-name">{{$player->first_name}} {{$player->last_name}} {{$player->club}}</li>
                </ul>
                
            </div>

            <div class="players-edit">

                <ul>
                    <li class="playerss-edit">
                        <a href="{{ action('PlayersController@edit', $player->id) }}">
                            <button type="button">Edit</button>
                        </a>
                    </li>
                </ul>

            </div>

            <div class="players-delete">

                <ul>
                    <li class="playerss-delete">
                        <a href="{{ action('PlayersController@destroy', $player->id) }}">
                            <button type="button">Delete</button>
                        </a>
                    </li>
                </ul>

            </div>
            
        </div>

    </div>
</div>

@endsection