@extends('layouts.app')

@section('title', $comic->title)

@section('main')
<div class="container p-4">
    <h3 class="text-uppercase series text-center">
        <a href="{{route('comics.index')}}">Back to list</a>
    </h3>
    <h1 class="text-center">{{ $comic->title }}</h1>
    <div class="d-flex justify-content-center ">
        <img src="{{$comic->image}}" alt="{{ $comic->title }}">
    </div>
    <div class="d-flex justify-content-between container-sm">
        <div>
            Series: {{$comic->series}}
        </div>
        <div>
            Price: {{$comic->price}}
        </div>
    </div>
    <div>
        {{$comic->description}}
    </div>
    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Rimuovi" class="btn btn-danger">
    </form>
</div>

@endsection