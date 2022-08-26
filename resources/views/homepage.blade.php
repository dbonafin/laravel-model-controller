@extends('layout.app')

@section('main-section')

    <h1>Laravel mysql database movies</h1>

    <div class="movies-wrapper">

        @foreach ($movies as $movie)
            <div class="movie-container">
                <div>Title: {{ $movie->title }}</div>
                <div>Original title: {{ $movie->original_title }}</div>
                <div>Vote: {{ $movie->vote }}</div>
            </div>
        @endforeach

    </div>

@endsection