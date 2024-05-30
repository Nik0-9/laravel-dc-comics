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
        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary ">
            Modifica
        </a>
        <button type="button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina
        </button>
        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">ATTENZIONE</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark">
                    Sei sicuro di voler eliminare questo fumetto?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                         No
                    </button>
                    <button type="button" class="btn btn-primary">
                        Si, cancella
                    </button>
                </div>
            </div>
        </div>
    </div>
    @include('partials.modal_delete')
 @endsection