@extends('layouts.app')

@section('title', $comic->title)

@section('main')
<div class="container p-4 w-75">
    <h3 class="text-uppercase series text-center">
        <a href="{{route('comics.index')}}">Back to list</a>
    </h3>
    <h1 class="text-center">{{ $comic->title }}</h1>
    <div class="d-flex justify-content-center ">
        <img src="{{$comic->image}}" alt="{{ $comic->title }}">
    </div>
    <div class="d-flex justify-content-between my-2">
        <div>
            Series: {{$comic->series}}
        </div>
        <div>
            Price: {{$comic->price}}
        </div>
    </div>
    <div class="mx-auto">
            {{$comic->description}}
    </div>
    <div class="d-flex">
        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary m-3">
            Modifica
        </a>
        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Rimuovi" class="btn btn-danger m-3">
        </form>
    </div>
</div>

@endsection