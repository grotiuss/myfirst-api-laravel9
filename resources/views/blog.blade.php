@extends('layouts.main')

@section('container')
    <h1>{{ $main_text }}</h1>
    <div class="container-fluid mt-5">
        @foreach ($posts as $post)
            <article class="mb-5">
                <h2>{{ $post->title }}</h2>
                <a href="/blog/{{ $post->slug }}">Click here!</a>
                {!! $post->excerpt !!} 
            </article>
        @endforeach
    </div>
@endsection
