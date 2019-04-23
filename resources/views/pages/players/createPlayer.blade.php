@extends('layouts.default')

@section('content')

<div class="create-players-container">

    <div class="players-box">

        <div class="players-header">

            <h1>Create Player</h1>

        </div>
        
        <div class="players-form">
            <form action="/players" method="POST">
                @csrf

                <div>
                    <label for="first_name">First Name</label>
                    <input type="text" placeholder="Player first name" name="first_name" required>
                </div>

                <div>
                    <label for="last-name">Last Name</label>
                    <input type="text" placeholder="Player last name" name="last_name" required>
                </div>
                
                <div>
                    <label for="club">Club</label>
                    <input type="text" placeholder="Player club" name="club" required>
                </div>
                
                <div>
                    <button>Submit</button>
                </div>
               

            </form>
        </div>

    </div>
    
</div>

@endsection