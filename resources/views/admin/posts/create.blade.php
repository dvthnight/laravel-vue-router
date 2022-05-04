@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route("admin.posts.store")}}" method="POST">
            @csrf  
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old("title")}}" placeholder="Inserisci il titolo">
                @error('title')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control" id="category_id" name="category_id">
                  <option>-- nessuna --</option>
                  @foreach ($categories as $category)
                      <option {{old("category_id") == $category->id ? "selected" : "" }} value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
            <div class="form-group">
                <label for="content">Contenuto dell'articolo</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3">{{old("content")}}</textarea> 
                @error('content')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="published_at">Data di pubblicazione</label>
                <input type="date" class="form-control @error('published_at') is-invalid @enderror" id="published_at" name="published_at" value="{{old("published_at")}}">
                @error('published_at')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
                <button type="submit" class="btn btn-primary">crea</button>
        </form>
    </div>
@endsection