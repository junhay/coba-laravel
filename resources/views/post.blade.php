@extends('layouts.main')

@section('container')
    {{-- <article>
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article> --}}
    <h1 class="mb-5">{{ $post->title }}</h1>
    {!! $post->body  !!}
    <a href="/posts">Back to Posts</a>
@endsection
