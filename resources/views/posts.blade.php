@extends('layouts.main')

@section('container')
    <h1>{{ $main_text }}</h1>
    <div class="container-fluid mt-5">
        @foreach ($posts as $post)
            <article class="mb-5">
                <h2>{{ $post['title'] }}</h2>
                <a href="/post/{{ $post['slug'] }}">Click here!</a>
                <p> {{ $post['body'] }}</p>
            </article>
        @endforeach
    </div>
@endsection
