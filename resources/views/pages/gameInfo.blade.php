@extends('layouts.default')

@section('content')

@foreach ($games as $game)

{{-- include game summary --}}
@include('shared.matchSummary')

<div class="more-info-container">
    {{-- first-secion --}}

    <div class="more-info">
        <div class="more-info-title">
            <div class="more-info-title__venue">
                <p>Played at : </p>
            </div>

            <div class="more-info-title__venue">
               <p>{{$game->home_venue_name->name}}</p>
            </div>
        </div>

        {{-- List of players and scores --}}
        <div class="more-info-list">
            <div class="more-info-players">

                {{-- HOME TEAM --}}
                <table>
                    <tr>
                        <th>Rnd</th>
                        <th>Name</th>
                        <th>Club</th>
                        <th>Score</th>
                    </tr>

                    @foreach ($home_games as $player)
                        @if($player->home_away === 'home')
                            <tr>
                                <td class=player-round>{{$player->round_played}}</td>
                                <td class="player-name">{{ $player->player->first_name }} {{ $player->player->last_name }}</td>
                                <td class=player-club>{{ $player->player->club }}</td>
                                <td class="player-score">{{ $player->score }}</td>
                            </tr>
                        @endif
                    @endforeach
                </table>
                {{-- END CONTAINER --}}
            </div>

            {{-- AWAY TEAM --}}
            <div class="more-info-players">
                <table>
                    <tr>
                        <th>Rnd</th>
                        <th>Name</th>
                        <th>Club</th>
                        <th>Score</th>
                    </tr>

                    @foreach ($home_games as $player)
                        @if($player->home_away === 'away')
                            <tr>
                                <td class=player-round>{{$player->round_played}}</td>
                                <td class="player-name">{{ $player->player->first_name }} {{ $player->player->last_name }}</td>
                                <td class=player-club>{{ $player->player->club }}</td>
                                <td class="player-score">{{ $player->score }}</td>
                            </tr>
                        @endif
                    @endforeach
                </table>
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
                        
                        <p>{{$game->away_venue_name->name}}</p>
                        
                    </div>
                {{-- set id to game id for scrolling --}}
            </div>

            {{-- List of players and scores --}}
            <div class="more-info-list">
                <div class="more-info-players">

                    {{-- HOME TEAM --}}
                    <table>
                        <tr>
                            <th>Rnd</th>
                            <th>Name</th>
                            <th>Club</th>
                            <th>Score</th>
                        </tr>

                        @foreach ($away_games as $player)
                            @if($player->home_away === 'home')
                                <tr>
                                    <td class=player-round>{{$player->round_played}}</td>
                                    <td class="player-name">{{ $player->player->first_name }} {{ $player->player->last_name }}</td>
                                    <td class=player-club>{{ $player->player->club }}</td>
                                    <td class="player-score">{{ $player->score }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                    {{-- END CONTAINER --}}
                </div>

                {{-- AWAY TEAM --}}
                <div class="more-info-players">
                    <table>
                        <tr>
                            <th>Rnd</th>
                            <th>Name</th>
                            <th>Club</th>
                            <th>Score</th>
                        </tr>
    
                        @foreach ($home_games as $player)
                            @if($player->home_away === 'away')
                                <tr>
                                    <td class=player-round>{{$player->round_played}}</td>
                                    <td class="player-name">{{ $player->player->first_name }} {{ $player->player->last_name }}</td>
                                    <td class=player-club>{{ $player->player->club }}</td>
                                    <td class="player-score">{{ $player->score }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                </div>
            </div>
            {{-- END CONTAINER --}}
        </div>
        {{-- END LIST --}}
        {{-- END MORE INFO FIRST --}}
    </div>
</div>

{{-- END MORE INFO CONTAINER --}}
@endforeach

@endsection