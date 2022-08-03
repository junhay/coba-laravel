@extends('layouts.main')

@section('container')
    <article class="mb-5">
        @foreach ($posts as $post)
            <h2>
                <a href="/posts/{{ $post->id }}"> {{ $post->title }}</a>
            </h2>
            <p>{{ $post->excerpt }}</p>
        @endforeach
    </article>
@endsection

