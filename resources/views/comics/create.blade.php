@extends('layouts.app')

@section('title', 'Add Comics')

@section('main')
<section class="container">
    <h2 class="text-center">Aggiungi fumetto</h2>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea id="description" class="form-control" name="description" cols="30" rows="10" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Url immagine</label>
            <input type="text" class="form-control" id="image" name="image" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control w-50" id="price" name="price" required>
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