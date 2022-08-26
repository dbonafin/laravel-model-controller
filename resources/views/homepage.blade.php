@extends('layout.app')

@section('main-section')

    <h1>My favourite movies</h1>

    @foreach ($movies as $movie)
        <div>
            <div>Title: {{ $movie->title }}</div>
            <div>Original title: {{ $movie->original_title }}</div>
            <div>Vote: {{ $movie->vote }}</div>
        </div>
        <br>
    @endforeach

@endsection