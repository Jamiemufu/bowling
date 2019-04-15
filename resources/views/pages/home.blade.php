@extends('layouts.default')

@section('content')

<main>

    @foreach ($matches as $match)

        {{-- container for each Rresult --}}
        <div class="results-container">

            {{-- first row of titles --}}
            <div class="results-container__title">
                <div class="results-div">
                    <p>{{ $match['division'] }}</p>
                </div>
                {{-- results info --}}
                <div class="results-date first">
                    <p>{{ $match['date'] }}</p>
                </div>
            </div>

            {{-- second row of titles --}}
            <div class="results-container__title">
                <div class="results-info">
                    <p class="more-info-button">More info...</p>
                </div>
            </div>

            {{-- main results --}}
            <div class="results-container__main">

                {{-- first team --}}
                {{-- team logo --}}
                <div class="results-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </div>

                {{-- team 1 results and name --}}
                <div class="results-team">
                    <div class="results-team__header">
                        <p>{{ $match['home_team'] }}</p>
                    </div>
                    <div class="results-team__score first-score">
                        <p class="score">{{ $match['home_score'] }}</p>
                    </div>
                </div>
                {{-- end first team --}}

                {{-- vs/middle --}}
                <div class="results-vs">
                    <h1>V</h1>
                </div>

                {{-- second team --}}
                {{-- team 2 results and name --}}
                <div class="results-team">
                    <div class="results-team__header">
                        <p>{{ $match['away_team'] }}</p>
                    </div>
                    <div class="results-team__score second-score">
                        <p class="score">{{ $match['away_score'] }}</p>
                    </div>
                </div>

                {{-- team 2 logo --}}
                <div class="results-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </div>
                {{-- END CONTAINER --}}
            </div>

            {{-- container for height animation --}}
            <div class="more-info-container">

                {{-- first-secion --}}
                <div class="more-info">
                    <div class="more-info-title">
                        <div class="more-info-title__venue">
                            <p>Played at :{{ $match['home_venue'] }} </p>
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
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                    <li>6</li>
                                    <li>7</li>
                                    <li>8</li>
                                    <li>9</li>
                                    <li>10</li>
                                    <li>11</li>
                                    <li>12</li>
                                </ul>
                            </div>

                            <div class="player-name">
                                <ul>
                                    @foreach ($players as $player)
                                        @if ($player['player_homeaway'] == 'home')
                                            <li>{{ $player['player_name'] }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>

                            <div class="player-club">
                                <ul>
                                    @foreach ($players as $player)
                                        @if ($player['player_homeaway'] == 'home')
                                            <li>{{ $player['player_club'] }}</li>
                                        @endif
                                    @endforeach
                                    {{-- SCORE HEADER --}}
                                    <li>Score:</li>
                                </ul>
                            </div>

                            <div class="player-score">
                                <ul>
                                    @foreach ($players as $player)
                                        @if ($player['player_homeaway'] == 'home')
                                            <li class="player-score-home">{{ $player['player_score'] }}</li>
                                        @endif
                                    @endforeach
                                    {{-- FINAL SCORE --}}
                                    <li class="home-score win-text">
                                        @php $total = 0; @endphp
                                        @foreach ($players as $player)
                                            @if ($player['player_homeaway'] == 'home')
                                                @php
                                                    $total += $player['player_score'];
                                                @endphp
                                            @endif
                                        @endforeach
                                        {{$total}}
                                    </li>
                                </ul>
                            </div>
                            {{-- END CONTAINER --}}
                        </div>

                        {{-- SECOND TEAM LISTS --}}
                        <div class="more-info-players">

                            <div class="player-count">
                                <ul>
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                    <li>6</li>
                                    <li>7</li>
                                    <li>8</li>
                                    <li>9</li>
                                    <li>10</li>
                                    <li>11</li>
                                    <li>12</li>
                                </ul>
                            </div>

                            <div class="player-name">
                                <ul>
                                    @foreach ($players as $player)
                                        @if ($player['player_homeaway'] == 'away')
                                            <li>{{ $player['player_name'] }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>

                            <div class="player-club">
                                <ul>
                                    @foreach ($players as $player)
                                    {{-- show only away --}}
                                        @if ($player['player_homeaway'] == 'away')
                                            <li>{{ $player['player_club'] }}</li>
                                        @endif
                                    @endforeach
                                    {{-- SCORE HEADER --}}
                                    <li>Score:</li>
                                </ul>
                            </div>

                            <div class="player-score">
                                <ul>
                                    @foreach ($players as $player)
                                    {{-- show only away --}}
                                        @if ($player['player_homeaway'] == 'away')
                                            <li>{{ $player['player_score'] }}</li>
                                        @endiF
                                    @endforeach
                                    {{-- FINAL SCORE --}}
                                    <li class="home-score win-text">
                                        @php $total = 0; @endphp
                                        @foreach ($players as $player)
                                            @if ($player['player_homeaway'] == 'away')
                                                @php
                                                    $total += $player['player_score'];
                                                @endphp
                                            @endif
                                        @endforeach
                                        {{$total}}
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
                                <p>Played at: ESCULUSHAM BOWLING CLUB</p>
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
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>4</li>
                                        <li>5</li>
                                        <li>6</li>
                                        <li>7</li>
                                        <li>8</li>
                                        <li>9</li>
                                        <li>10</li>
                                        <li>11</li>
                                        <li>12</li>
                                    </ul>
                                </div>

                                <div class="player-name">
                                    <ul>
                                        <li>Ross Dunkley</li>
                                        <li>Neil Clarke</li>
                                        <li>Ryan Prosser</li>
                                        <li>Steve Freer</li>
                                        <li>Pete Dunkley</li>
                                        <li>Simon Trentham</li>
                                        <li>Tom Pritchard</li>
                                        <li>Jason Glavin</li>
                                        <li>Greg Smith</li>
                                        <li>Jon Palmer</li>
                                        <li>Mark Denman</li>
                                        <li>Phil Clinton (C)</li>
                                    </ul>
                                </div>

                                <div class="player-club">
                                    <ul>
                                        <li>King George V</li>
                                        <li>Tamworth in Arden</li>
                                        <li>King George V</li>
                                        <li>Boldmere St Mich</li>
                                        <li>Selly Park</li>
                                        <li>Boldmere St Mich</li>
                                        <li>King George V</li>
                                        <li>King George V</li>
                                        <li>WBSFC</li>
                                        <li>Kings Heath Park</li>
                                        <li>Boldmere St Mich</li>
                                        <li>George</li>
                                        {{-- SCORE HEADER --}}
                                        <li>Score:</li>
                                    </ul>
                                </div>

                                <div class="player-score">
                                    <ul>
                                        <li>21</li>
                                        <li>21</li>
                                        <li>21</li>
                                        <li>16</li>
                                        <li>20</li>
                                        <li>21</li>
                                        <li>21</li>
                                        <li>21</li>
                                        <li>21</li>
                                        <li>15</li>
                                        <li>15</li>
                                        <li>21</li>
                                        {{-- FINAL SCORE --}}
                                        <li>234</li>
                                    </ul>
                                </div>
                                {{-- END CONTAINER --}}
                            </div>

                            {{-- SECOND TEAM LISTS --}}
                            <div class="more-info-players">

                                <div class="player-count">
                                    <ul>
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>4</li>
                                        <li>5</li>
                                        <li>6</li>
                                        <li>7</li>
                                        <li>8</li>
                                        <li>9</li>
                                        <li>10</li>
                                        <li>11</li>
                                        <li>12</li>
                                    </ul>
                                </div>

                                <div class="player-name">
                                    <ul>
                                        <li>Ross Dunkley</li>
                                        <li>Neil Clarke</li>
                                        <li>Ryan Prosser</li>
                                        <li>Steve Freer</li>
                                        <li>Pete Dunkley</li>
                                        <li>Simon Trentham</li>
                                        <li>Tom Pritchard</li>
                                        <li>Jason Glavin</li>
                                        <li>Greg Smith</li>
                                        <li>Jon Palmer</li>
                                        <li>Mark Denman</li>
                                        <li>Phil Clinton (C)</li>
                                    </ul>
                                </div>

                                <div class="player-club">
                                    <ul>
                                        <li>King George V</li>
                                        <li>Tamworth in Arden</li>
                                        <li>King George V</li>
                                        <li>Boldmere St Mich</li>
                                        <li>Selly Park</li>
                                        <li>Boldmere St Mich</li>
                                        <li>King George V</li>
                                        <li>King George V</li>
                                        <li>WBSFC</li>
                                        <li>Kings Heath Park</li>
                                        <li>Boldmere St Mich</li>
                                        <li>George</li>
                                        {{-- SCORE HEADER --}}
                                        <li>Score:</li>
                                    </ul>
                                </div>
                                
                                <div class="player-score">
                                    <ul>
                                        <li>21</li>
                                        <li>21</li>
                                        <li>21</li>
                                        <li>16</li>
                                        <li>20</li>
                                        <li>21</li>
                                        <li>21</li>
                                        <li>21</li>
                                        <li>21</li>
                                        <li>15</li>
                                        <li>15</li>
                                        <li>21</li>
                                        {{-- FINAL SCORE --}}
                                        <li>234</li>
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
        </div>
        {{-- END RESULT --}}
        {{-- container for each Rresult --}}
    @endforeach
</main>


@endsection
