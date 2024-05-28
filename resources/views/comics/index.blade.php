@extends('layouts.app')

@section('title', 'Laravel Comics')

@section('main')
<div class="container p-4">
    <div class="series d-flex justify-content-center align-items-center">
        <h3 class="text-uppercase">
            current series
        </h3>
    </div>
    <form action="{{route('comics.index')}}" method="GET" id="search-form">
        <select name="search" id="search" class="form-control w-25 mb-3">
            <option value="">Tutti</option>
            <option value="comic book">Comic book</option>
            <option value="graphic novel">Graphic novel</option>
        </select>
        <button class="btn btn-secondary mb-3" type="submit">Cerca</button>
    </form>
        <div class="row ">
        @include('partials.card')
    </div>
    <div class="text-center mt-2">
        <span class="text-uppercase load-more ">
            <a href="{{route('comics.create')}}">load more</a>
        </span>
    </div>
</div>

@endsection