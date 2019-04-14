@extends('layouts.default')

@section('content')

<main>
    {{-- container for each Rresult --}}
    <div class="results-container">

        {{-- first row of titles --}}
        <div class="results-container__title">

            <div class="results-div">
                <p>Senior County Championship 2014</p>
            </div>

            {{-- results info --}}

            <div class="results-date first">
                <p><?php echo date("F j, Y"); ?></p>
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

                <div class="results-team__header home-team">
                    <p>Warwick & Worcester</p>
                </div>
                <div class="results-team__score">
                    <p class="score win-text">464</p>
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

                <div class="results-team__header away-team">
                    <p>Wales</p>
                </div>

                <div class="results-team__score">
                    <p class="score lose-text">434</p>
                </div>

            </div>

            {{-- team 2 logo --}}
            <div class="results-logo">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </div>

        </div>

        {{-- container for height animation --}}
        <div class="more-info-container">

            {{-- first-secion --}}
            <div class="more-info">

                <div class="more-info-title">

                    <div class="more-info-title__venue">
                        <p>Played at: MOOR LANE BOWLING CLUB</p>
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


</main>


@endsection
