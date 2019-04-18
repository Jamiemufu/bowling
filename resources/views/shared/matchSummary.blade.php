<!-- START OF MATCH SUMMARY -->
<div class="results-container">
   <!-- match titles -->
    <div class="results-container__title">
        <!--match division-->
        <div class="results-div">
            <p>Division: {{ $match->division }}</p>
        </div>
        <!-- match date-->
        <div class="results-date first">
            <p>{{ $match->date }}</p>
        </div>

    </div>
    <!-- Second row of titles -->
    <div class="results-container__title">

        <div class="results-info">

            <p class="more-info-button">
                <!-- if request is /results show more info -->
                @if (request()->is('results'))
                    <a href="{{ action('Controller@show', $match->id) }}"> More info... </a>
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
                <p>{{ $match->home_team }}</p>
            </div>

            <div class="results-team__score first-score">
                <p class="score">{{ $match->home_score }}</p>
            </div>
        </div>

        <!-- VS -->
        <div class="results-vs">
            <h1>V</h1>
        </div>

        <div class="results-team">

            <div class="results-team__header">
                <p>{{ $match->away_team }}</p>
            </div>

            <div class="results-team__score second-score">
                <p class="score">{{ $match->away_score }}</p>
            </div>

        </div>

        <div class="results-logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
        
    </div>
</div>
{{-- END RESULT --}}

