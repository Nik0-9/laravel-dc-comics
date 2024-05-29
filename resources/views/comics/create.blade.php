@extends('layouts.app')

@section('title', 'Add Comics')

@section('main')
<section class="container">
    <h2 class="text-center">Aggiungi fumetto</h2>
    
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div id="titleHelp" class="form-text text-white">Inserire minimo 3 caratteri</div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea id="description" class="form-control @error('title') is-invalid @enderror" name="description" cols="30" rows="10">{{old('description')}}</textarea>
            @error('description')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div id="titleHelp" class="form-text text-white">Inserire minimo 10 caratteri</div>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Url immagine</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image')}}">
            @error('image')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control w-50 @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}">
            @error('image')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="series" class="form-label">Nome serie</label>
            <input type="text" class="form-control w-50" id="series" name="series">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select name="type" id="type" class="form-label ">
                <option value="comic book">Comic book</option>
                <option value="grapich novel">Grapich novel</option>
            </select>
        </div>
        <div class="pb-5">

            <button type="submit" class="btn btn-primary ">Crea</button>
            <button type="reset" class="btn btn-secondary ">Svuota campi</button>
        </div>

    </form>
</section>


@endsection