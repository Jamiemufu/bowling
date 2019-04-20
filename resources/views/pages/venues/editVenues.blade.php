@extends('layouts.default')

@section('content')

<div class="create-venue-container">

    <div class="venue-box">

        <div class="venue-header">
            <h1>Venues</h1>
        </div>
        
        
        <div class="venue-lists">

            <div class="venue-name">

                <ul>
                    <li class="venues-name">{{$venue->name}}</li>
                </ul>
                
            </div>

            <div class="venue-edit">

                <ul>
                    <li class="venues-edit">
                        <a href="{{ action('VenuesController@edit', $venue->id) }}">
                            <button type="button">Edit</button>
                        </a>
                    </li>
                </ul>

            </div>

            <div class="venue-delete">

                <ul>
                    <li class="venues-delete">
                        <a href="{{ action('VenuesController@destroy', $venue->id) }}">
                            <button type="button">Delete</button>
                        </a>
                    </li>
                </ul>

            </div>
            
        </div>

    </div>
</div>

@endsection