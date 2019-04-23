@extends('layouts.default')

@section('content')

<div class="create-players-container">

    <div class="players-box">

        <div class="players-header">

            <h1>Player Stats</h1>

        </div>
    </div>
    <div class="players-stats-results">        
        <div class="players-stats">
            
            <table>
                <tr>                    
                    <th class="first">First Name</th>
                    <th class="last">Last Name</th>
                    <th class="club">Club</th>
                    <th class="game">Game</th>
                    <th class="date">Date</th>
                    <th class="round">Rnd</th>
                    <th class="score">Score</th>
                    <th class="home-away">H/A</th>
                    <th class="venue">Venue</th>
                </tr>
                @foreach ($stats as $stat)
                <tr>
                    <td> {{$stat->player->first_name}}</td>
                    <td> {{$stat->player->last_name}}</td>
                    <td> {{$stat->player->club}}</td>
                    <td> {{$stat->game->home_team}} v {{$stat->game->away_team}}</td>
                    <td> {{$stat->game->date}}</td>
                    <td class="round"> {{$stat->round_played}}</td>
                    <td class="score"> {{$stat->score}}</td>
                    <td class="home-away"> {{$stat->home_away}}</td>
                    <td> {{$stat->player_venue->name}}</td>                                
                </tr>
                @endforeach
        </table>

    </div>
</div>

@endsection