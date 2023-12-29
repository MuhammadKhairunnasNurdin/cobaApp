{{--testing vardump our variable and die code below this code with dumpDie(dd),--}}
{{--@dd($posts)--}}

@extends('layouts.main')

@section('sectionName')
    @foreach($posts as $post)
        <article class="mb-5">
            <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>

            {{--you can use this below syntax, that use object model Post--}}
            {{--<h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>--}}

            <p>{{$post->execert}}</p>

            {{--you can user {!!  !!}} this blade for not escaping character
            different with {{}} that do escape character--}}

        </article>
    @endforeach
@endsection
