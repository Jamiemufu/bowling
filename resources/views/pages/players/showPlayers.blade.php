@extends('layouts.default')

@section('content')

<div class="create-players-container">

    <div class="players-box">

        <div class="players-header">

            @if (Request::path() === 'players/search')
                <h1>Search Results</h1>
            @else
                <h1>Players</h1>
                <a href="/players/create">
                    <button type="button">Create a new Player</button>
                </a>
            @endif
            
            @if (session('status'))
                <div class="alert">
                    {{ session('status') }}
                </div>
            @endif

        </div>
    </div>
    <div class="players-results">
        <div class="players-header">
            @if (Request::path() !== 'players/search')
            <div>
                <form action="/players/search" method="POST">
                    @csrf
                    <input type="text" name="search" placeholder="Search Players">
                    <a href="/players/search">
                        <button>Search Players</button>
                    </a>
                </form>
            </div>
            @endif
        </div>
        <div class="players-table">
            
            <table>
                <tr>
                    <th class="player-id">ID</th>
                    <th class="player-first">First Name</th>
                    <th class="player-last">Last Name</th>
                    <th class="player-club">Club</th>
                    <th class="player-edit stack"></th>
                    <th class="player-delete stack"></th>
                </tr>

                @foreach ($players as $player)

                <tr>
                    <td> {{$player->id}}</td>
                    <td> {{$player->first_name}}</td>
                    <td> {{$player->last_name}}</td>
                    <td> {{$player->club}}</td>
                    <td class="player-edit stack"> 
                        <a href="{{ action('PlayersController@edit', $player->id) }}">
                            Edit
                        </a>
                    </td>
                    <td class="player-delete stack"> 
                        <a href="{{ action('PlayersController@destroy', $player->id) }}">
                           Delete
                        </a>
                    </td>
                </tr>

                @endforeach

        </table>

    </div>
</div>

@endsection