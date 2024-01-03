{{--testing vardump our variable and die code below this code with dumpDie(dd),--}}
{{--@dd($posts)--}}

@extends('layouts.main')

@section('sectionName')
    <h1 class="mb-5">Post Categories</h1>
    @foreach($categories as $category)
        <ul>
            <li>
                <h2><a href="/categories/{{$category->slug}}">{{$category->name}}</a></h2>
            </li>

            {{--you can use this below syntax, that use object model Post--}}
            {{--<h2><a href="/posts/{{$category->id}}">{{$category->title}}</a></h2>--}}
            {{--you can user {!!  !!}} this blade for not escaping character
            different with {{}} that do escape character--}}

        </ul>
    @endforeach
@endsection
