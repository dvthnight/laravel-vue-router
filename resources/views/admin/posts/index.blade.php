@extends('layouts.app')

@section('content')

    <ul>
        @foreach ($posts as $post)
            <h3>{{$post->title}}</h3>
            <p>{{$post->slug}}</p>
        @endforeach
    </ul>

@endsection