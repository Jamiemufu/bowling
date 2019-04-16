@extends('layouts.default')

@section('content')


    @foreach ($matches as $match)
        {{-- container for each Rresult --}}
        <div class="results-container">

            {{-- first row of titles --}}
            <div class="results-container__title">
                <div class="results-div">
                    <p>Division: {{ $match->division }}</p>
                </div>
                {{-- results info --}}
                <div class="results-date first">
                    <p>{{ $match->match_date }}</p>
                </div>
            </div>

            {{-- second row of titles --}}
            <div class="results-container__title">
                <div class="results-info">
                    <p class="more-info-button">
                    <a href="{{ action('Controller@show', $match->id) }}"> More info... </a>
                    </p>
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
                        <p>{{ $match->home_team }}</p>
                    </div>
                    <div class="results-team__score first-score">
                        <p class="score">{{ $match->home_score }}</p>
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
        {{-- END RESULT --}}
        {{-- container for each Rresult --}}
    @endforeach


@endsection
