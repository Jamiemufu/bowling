@extends('layouts.default')

@section('content')


@foreach ($matches as $match)
{{-- container for each Rresult --}}
<div class="results-container">

    {{-- first row of titles --}}
    <div class="results-container__title">
        <div class="results-div">
            <p>{{ $match->division }}</p>
        </div>

        {{-- results info --}}
        <div class="results-date first">
            <p>{{ $match->date }}</p>
        </div>
    </div>

    {{-- second row of titles --}}
    <div class="results-container__title">
        <div class="results-info">

            <p class="more-info-button">
                <a href="/results">Back...</a>
            </p>

        </div>
    </div>

    {{-- main results --}}
    <div class="results-container__main">
        {{-- team logo --}}
        <div class="results-logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>

        {{-- team 1 results and name --}}
        <div class="results-team">
            <div class="results-team__header">
                <p>{{ $match->home_team }}</p>
            </div>

            <div class="results-team__score first-score">
                <p class="score">{{ $match->home_score }}</p>
            </div>
        </div>

        {{-- vs/middle --}}
        <div class="results-vs">
            <h1>V</h1>
        </div>

        {{-- team 2 results and name --}}
        <div class="results-team">
            <div class="results-team__header">
                <p>{{ $match->away_team }}</p>
            </div>

            <div class="results-team__score second-score">
                <p class="score">{{ $match->away_score }}</p>
            </div>
        </div>

        {{-- team 2 logo --}}
        <div class="results-logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
        {{-- END CONTAINER --}}
    </div>
</div>
{{-- container for height animation --}}
<div class="more-info-container">

    {{-- first-secion --}}
    <div class="more-info">
        <div class="more-info-title">
            <div class="more-info-title__venue">
                <p>Played at : </p>
            </div>

            <div class="more-info-title__venue">
                <p>HOME</p>
            </div>
        </div>

        {{-- List of players and scores --}}
        <div class="more-info-list">
            <div class="more-info-players">

                {{-- FIRST TEAM LISTS --}}
                <div class="player-count">
                    <ul>
                        @for ($i = 1; $i < 13; $i++)
                            <li>{{$i}}</li>
                        @endfor
                    </ul>
                </div>

                <div class="player-name">
                    <ul>
                        @foreach ($players as $player)
                            {{-- @if ($player->player_homeaway == 'home') --}}
                                <li>{{ $player->first_name }} {{ $player->last_name }}</li>
                            {{-- @endif --}}
                        @endforeach
                    </ul>
                </div>

                <div class="player-club">
                    <ul>
                        @foreach ($players as $player)
                            {{-- @if ($player->player_homeaway == 'home') --}}
                                <li>{{ $player->club }}</li>
                            {{-- @endif --}}
                        @endforeach
                        {{-- SCORE HEADER --}}
                        <li>Score:</li>
                    </ul>
                </div>

                <div class="player-score">
                    <ul>

                        <li class="home-score win-text">
                            @foreach ($players as $player)
                            {{-- @if ($player->player_homeaway == 'home') --}}
                               
                            {{-- @endif --}}
                            @endforeach
                        </li>
                    </ul>
                </div>
                {{-- END CONTAINER --}}
            </div>

            {{-- SECOND TEAM LISTS --}}
            <div class="more-info-players">

                <div class="player-count">
                    <ul>
                        @for ($i = 1; $i < 13; $i++) 
                            <li>{{$i}}</li>
                        @endfor
                    </ul>
                </div>

                <div class="player-name">
                    <ul>
                        @foreach ($players as $player)
                            {{-- @if ($player->player_homeaway == 'home') --}}
                                <li>{{ $player->first_name }} {{ $player->last_name }}</li>
                            {{-- @endif --}}
                        @endforeach
                    </ul>
                </div>

                <div class="player-club">
                    <ul>
                        @foreach ($players as $player)
                        {{-- show only away --}}
                            {{-- @if ($player->player_homeaway == 'home') --}}
                                <li>{{ $player->club }}</li>
                            {{-- @endif --}}
                        @endforeach
                        {{-- SCORE HEADER --}}
                        <li>Score:</li>
                    </ul>
                </div>

                <div class="player-score">
                    <ul>
                       <li class="home-score win-text">
                            <li>{{ $player->player_score }}</li>
                       </li>
                    </ul>
                </div>
                {{-- END CONTAINER --}}
            </div>
        </div>
        {{-- END LIST --}}

        {{-- END MORE INFO FIRST --}}
        <div class="more-info second">
            <div class="more-info-title">

                <div class="more-info-title__venue">
                    <p>Played at:</p>
                </div>

                <div class="more-info-title__venue">
                    <p>AWAY</p>
                </div>
                {{-- set id to match id for scrolling --}}
            </div>

            {{-- List of players and scores --}}
            <div class="more-info-list">

                <div class="more-info-players">

                    {{-- FIRST TEAM LISTS --}}
                    <div class="player-count">
                        <ul>
                            @for ($i = 1; $i < 13; $i++) 
                                <li>{{$i}}</li>
                            @endfor
                        </ul>
                    </div>

                    <div class="player-name">
                        <ul>
                            @foreach ($players as $player)
                                {{-- @if ($player->player_homeaway == 'home') --}}
                                    <li>{{ $player->first_name }} {{ $player->last_name }}</li>
                                {{-- @endif --}}
                            @endforeach
                        </ul>
                    </div>

                    <div class="player-club">
                        <ul>
                            @foreach ($players as $player)
                            {{-- show only away --}}
                                {{-- @if ($player->player_homeaway == 'home') --}}
                                    <li>{{ $player->club }}</li>
                                {{-- @endif --}}
                            @endforeach
                            {{-- SCORE HEADER --}}
                            <li>Score:</li>
                        </ul>
                    </div>

                    <div class="player-score">
                        <ul>
                            <li class="home-score win-text"></li>
                        </ul>
                    </div>
                </div>

                {{-- SECOND TEAM LISTS --}}
                <div class="more-info-players">

                    <div class="player-count">
                        <ul>
                            @for ($i = 1; $i < 13; $i++)
                                <li>{{$i}}</li>
                            @endfor
                        </ul>
                    </div>

                    <div class="player-name">
                        <ul>
                            @foreach ($players as $player)
                                {{-- @if ($player->player_homeaway == 'away') --}}
                                    <li>{{ $player->first_name }} {{ $player->last_name }}</li>
                                {{-- @endif --}}
                            @endforeach
                        </ul>
                    </div>

                    <div class="player-club">
                        <ul>
                            @foreach ($players as $player)
                            {{-- show only away --}}
                                {{-- @if ($player->player_homeaway == 'away') --}}
                                    <li>{{ $player->club }}</li>
                                {{-- @endif --}}
                            @endforeach
                            {{-- SCORE HEADER --}}
                            <li>Score:</li>
                        </ul>
                    </div>
                    <div class="player-score">
                        <ul>
                            <li class="home-score win-text"></li>
                        </ul>
                    </div>
                    {{-- END CONTAINER --}}
                </div>
            </div>
            {{-- END LIST --}}
            {{-- END MORE INFO FIRST --}}
        </div>
    </div>
</div>
{{-- END MORE INFO CONTAINER --}}
@endforeach

@endsection