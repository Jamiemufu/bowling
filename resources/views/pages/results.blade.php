@extends('layouts.default')

@section('content')

    @foreach ($matches as $match)

        @include('shared.matchSummary')
        
    @endforeach


@endsection
