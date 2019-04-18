@extends('layouts.default')

@section('content')

@dump($players)
@dump($matches)
    @foreach ($matches as $match)

        {{-- include match summary --}}
        @include('shared.matchSummary')

        <div class="more-info-container">
            {{-- first-secion --}}
            <div class="more-info">
                <div class="more-info-title">
                    <div class="more-info-title__venue">
                        <p>Played at : </p>
                    </div>
        
                    <div class="more-info-title__venue">
                    <p>{{$match->home_venue}}</p>
                    </div>
                </div>

                {{-- List of players and scores --}}
                <div class="more-info-list">
                    <div class="more-info-players">

                        {{-- HOME TEAM --}}
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
                                    @if ($player->home_away === 'home')
                                        <li>{{ $player->first_name }} {{ $player->last_name }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                        <div class="player-club">
                            <ul>
                                @foreach ($players as $player)
                                    @if ($player->home_away === 'home')
                                        <li>{{ $player->club }}</li>
                                    @endif
                                @endforeach
                                {{-- SCORE HEADER --}}
                                <li>Score:</li>
                            </ul>
                        </div>

                        <div class="player-score">
                            <ul>
                                <li class="home-score win-text">
                                    @foreach ($players as $player)
                                        @if ($player->home_away === 'home')
                                            <li>{{ $player->score }}</li>
                                        @endif
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                        {{-- END CONTAINER --}}
                    </div>

                    {{-- AWAY TEAM --}}
                    <div class="more-info-players">
                        <div class="player-name">
                            <ul>
                                @foreach ($players as $player)
                                    @if ($player->home_away === 'away')
                                        <li>{{ $player->first_name }} {{ $player->last_name }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                        <div class="player-club">
                            <ul>
                                @foreach ($players as $player)
                                {{-- show only away --}}
                                    @if ($player->home_away === 'away')
                                        <li>{{ $player->club }}</li>
                                    @endif
                                @endforeach
                                {{-- SCORE HEADER --}}
                                <li>Score:</li>
                            </ul>
                        </div>

                        <div class="player-score">
                            <ul>
                            <li class="home-score win-text">
                                    @foreach ($players as $player)
                                        @if ($player->home_away === 'away')
                                        <li>{{ $player->score }}</li>
                                        @endif
                                    @endforeach
                            </li>
                            </ul>
                        </div>
                        {{-- END CONTAINER --}}
                    </div>
                </div>
                {{-- END LIST --}}
                {{-- END HOME TEAM--}}
                <div class="more-info second">
                    <div class="more-info-title">

                        <div class="more-info-title__venue">
                            <p>Played at:</p>
                        </div>

                        <div class="more-info-title__venue">
                        <p>{{$match->away_venue}}</p>
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
                                        @if ($player->home_away === 'away')
                                            <li>{{ $player->first_name }} {{ $player->last_name }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>

                            <div class="player-club">
                                <ul>
                                    @foreach ($players as $player)
                                    {{-- show only away --}}
                                        @if ($player->home_away === 'away')
                                            <li>{{ $player->club }}</li>
                                        @endif
                                    @endforeach
                                    {{-- SCORE HEADER --}}
                                    <li>Score:</li>
                                </ul>
                            </div>

                            <div class="player-score">
                                <ul>
                                    @foreach ($players as $player)
                                        @if ($player->home_away === 'away')
                                            <li class="home-score win-text"></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        {{-- HOME TEAM LISTS --}}
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
                                        @if ($player->home_away === 'home')
                                            <li>{{ $player->first_name }} {{ $player->last_name }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>

                            <div class="player-club">
                                <ul>
                                    @foreach ($players as $player)
                                    {{-- show only home --}}
                                        @if ($player->home_away === 'home')
                                            <li>{{ $player->club }}</li>
                                        @endif
                                    @endforeach
                                    {{-- SCORE HEADER --}}
                                    <li>Score:</li>
                                </ul>
                            </div>
                            <div class="player-score">
                                <ul>
                                    @foreach ($players as $player)
                                        @if ($player->home_away === 'home')
                                            <li class="home-score win-text">{{ $player->score}}</li>
                                        @endif
                                    @endforeach
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