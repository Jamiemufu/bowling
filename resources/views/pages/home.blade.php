@extends('layouts.default')

@section('content')

<main>
    {{-- container for each match --}}
    <div class="results-container">
        {{-- first row of titles --}}
        <div class="results-container__title">
            <div class="results-div">
                <p>Senior County Championship 2014</p>
            </div>
            <div class="results-venue">
                <p>Played at Moor Lane Bowling Club</p>
            </div>
        </div>
        {{-- second row of titles --}}
        <div class="results-container__title">
            <div class="results-date">
                <p><?php echo date("F j, Y"); ?></p>
            </div>
            <div class="results-ha">
                <p>Home/Away : Away</p>
            </div>
        </div>
        <div class="results-container__title">
            <div class="results-info">
                <p>
                    <a href="#" id="more_info">
                        More info...
                    </a>
                </p>
            </div>
        </div>
        {{-- main results --}}
        <div class="results-container__main">
            {{-- first team --}}
            {{-- team logo --}}
            <div class="results-logo home win">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </div>
            {{-- team 1 results and name --}}
            <div class="results-team">
                <div>
                    <p>Warwick & Worcester</p>
                    <p class="score win-text">461</p>
                </div>
            </div>
            {{-- vs/middle --}}
            <div class="results-vs">
                <h1>V</h1>
            </div>
            {{-- second team --}}
            {{-- team 2 results and name --}}
            <div class="results-team">
                <div>
                    <p>Wales</p>
                    <p class="score lose-text">434</p>
                </div>
            </div>
            {{-- team 2 logo --}}
            <div class="results-logo away lose">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </div>
        </div>
        
    </div>
    {{-- TODO PLAYERS INFORMATION --}}
    {{-- Click on more info.. animated drop down displaying playing information --}}
</main>


@endsection
