<!-- START OF MATCH SUMMARY -->
<div class="results-container">
   <!-- game titles -->
    <div class="results-container__title">
        <!--game division-->
        <div class="results-div">
            <p>Division: {{ $game->division }}</p>
        </div>
        <!-- game date-->
        <div class="results-date first">
            <p>{{ $game->date }}</p>
        </div>

    </div>
    <!-- Second row of titles -->
    <div class="results-container__title">

        <div class="results-info">

            <p class="more-info-button">
                <!-- if request is /results show more info -->
                @if (request()->is('results'))
                    <a href="{{ action('Controller@show', $game->id) }}"> More info... </a>
                @else
                    <a href="/results"> Go back... </a>
                @endif
            </p>

        </div>

    </div>
   
    {{-- main results --}}
    <div class="results-container__main">

        <!-- First Team -->

        <div class="results-logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>

        <!-- Team one results and name -->
        <div class="results-team">

            <div class="results-team__header">
                <p>{{ $game->home_team }}</p>
            </div>

            <div class="results-team__score first-score">
                <p class="score">{{ $game->home_score }}</p>
            </div>
        </div>

        <!-- VS -->
        <div class="results-vs">
            <h1>V</h1>
        </div>

        <div class="results-team">

            <div class="results-team__header">
                <p>{{ $game->away_team }}</p>
            </div>

            <div class="results-team__score second-score">
                <p class="score">{{ $game->away_score }}</p>
            </div>

        </div>

        <div class="results-logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
        
    </div>
</div>
{{-- END RESULT --}}

