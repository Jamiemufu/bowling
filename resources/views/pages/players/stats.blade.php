@extends('layouts.default')

@section('content')

<div class="create-players-container">

    <div class="players-box stats">

        <div class="players-header">

            <h1>Player Stats for<br/>
                <span>{{$stats[0]->player->first_name}} {{$stats[0]->player->last_name}}</span><br>
                Playing for <br/><span>{{$stats[0]->player->club}}</span>
            </h1>

        </div>
    </div>
    <div class="players-stats-results">        
        <div class="players-stats">
            
            <table>
                <tr>        
                    <th class="date">Date</th>                                                   
                    <th class="game">Game</th>
                    <th class="venue">Venue</th>
                    <th class="home-away">H/A</th>
                    <th class="round">Rnd</th>
                    <th class="score">Score</th>
                    <th>Result</th>
                </tr>            
                @foreach ($stats as $stat)            
                <tr>           
                    <td> {{$stat->game->date}}</td>                             
                    <td> {{$stat->game->home_team}} v {{$stat->game->away_team}}</td>
                    <td> {{$stat->player_venue->name}}</td>   
                    <td class="home-away"> {{$stat->home_away}}</td> 
                    <td class="round"> {{$stat->round_played}}</td>
                    <td class="score"> {{$stat->score}}</td>                         
                    <td> Win/Lose </td>                         
                </tr>
                @endforeach
            </table>
        </table>

    </div>
</div>

@endsection