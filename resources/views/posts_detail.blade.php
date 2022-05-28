@extends('layouts.main')

@section('container')
    <h1>{{ $main_text }}</h1>
    <div class="container-fluid mt-5">
        <article class="mb-5">
            <h2>{{ $posts['title'] }}</h2>
            <a href="/post">Back to posts!</a>
            <p> {{ $posts['body'] }}</p>
        </article>
    </div>
@endsection
