@extends('layouts.app')

@section('title', $comic->title)

@section('main')
<div class="container">
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
</div>

@endsection