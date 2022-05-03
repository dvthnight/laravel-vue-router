@extends('layouts.app')

@section('content')


<table class="table table-hover table-dark">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Slug</th>
        <th scope="col">Data di pubblicazione</th>
        <th scope="col">Data di creazione</th>
        <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->slug}}</td>
            <td>{{$post->published_at}}</td>
            <td>{{$post->created_at}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    
                    <form action="{{route("admin.posts.edit",$post)}}" method="POST">
                        @csrf
                        @method("GET")
                        <button type="submit" class="btn btn-secondary">modifica</button>
                    </form>
                    <form action="{{route("admin.posts.destroy",$post)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-secondary">elimina</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        
    </tbody>
    </table>
    
@endsection