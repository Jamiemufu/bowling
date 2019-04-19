@extends('layouts.default')

@section('content')

    @foreach ($games as $game)

        @include('shared.matchSummary')
        
    @endforeach


@endsection
