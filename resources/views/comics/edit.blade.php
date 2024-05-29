@extends('layouts.app')

@section('title', 'Modifica')

@section('main')
<section class="container ">
    <h3 class="text-uppercase back-to text-center">
        <a href="{{route('comics.show', $comic->id)}}">Back to Comic</a>
    </h3>
    <h2 class="text-center">Modifica il fumetto</h2>
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$comic->title}}" >
            <div id="titleHelp" class="form-text">Inserire minimo 3 caratteri</div>
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" cols="30" rows="10">{{$comic->description}}</textarea>
            <div id="titleHelp" class="form-text">Inserire minimo 10 caratteri</div>
            @error('description')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Url immagine</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{$comic->image}}" >
            @error('image')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control w-50 @error('price') is-invalid @enderror" id="price" name="price" value="{{$comic->price}}">
            @error('price')
            <div class="alert alert-danger w-50">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Nome serie</label>
            <input type="text" class="form-control w-50" id="series" name="series" value="{{$comic->series}}">
        </div>
        <div>
            <label for="type" class="form-label">Tipo</label>
            <select name="type" id="type" class="form-label" value="{{$comic->type}}">
                <option value="comic book">Comic book</option>
                <option value="grapich novel">Grapich novel</option>
            </select>
        </div>
        <div class="pb-4 ">
            <button type="submit" class="btn btn-primary">Carica</button>
            <button type="reset" class="btn btn-secondary">Svuota campi</button>
        </div>

    </form>
</section>


@endsection