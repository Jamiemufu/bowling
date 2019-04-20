@extends('layouts.default')

@section('content')

<div class="create-venue-container">

    <div class="venue-box">

        <div class="venue-header">

            <h1>Create Venue</h1>

        </div>
        
        <div class="venue-form">
            <form action="/venues" method="POST">
                @csrf
                
                <input type="text" placeholder="Venue Name" name="venue_name">
            
                <button>Submit</button>

            </form>
        </div>

    </div>
    
</div>

@endsection