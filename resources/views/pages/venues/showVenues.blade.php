@extends('layouts.default')

@section('content')

<div class="create-venue-container">

    <div class="venue-box">
        <div class="venue-header">
            <h1>Venues</h1>

            <a href="/venues/create">
                <button>Create a new venue</button>
            </a>
        </div>
        
        @if (session('status'))
            <div class="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="venue-results">

        <div class="venue-lists">
            
            <div class="venue-name">
                <ul>
                    @foreach ($venues as $venue)
                        <li class="venues-name">{{$venue->name}}</li>
                    @endforeach
                </ul>
            </div>

            {{-- <div class="venue-edit">
                <ul>
                    @foreach ($venues as $venue)
                        <li class="venues-edit">
                            <a href="{{ action('VenuesController@edit', $venue->id) }}">
                                <button type="button">Edit</button>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div> --}}

            <div class="venue-delete">
                <ul>
                    @foreach ($venues as $venue)
                        <li class="venues-delete">
                            <a href="{{ action('VenuesController@destroy', $venue->id) }}">
                                <button type="button">Delete</button>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div> 

        </div>
        
    </div>
</div>

@endsection