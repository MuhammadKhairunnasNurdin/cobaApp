@extends('layouts.main')

@section('sectionName')
    <article>
        <h2>{{$post->title}}</h2>
        <p>{{$post->body}}</p>
    </article>

    <a href="/blog">Back To Post</a>
@endsection
