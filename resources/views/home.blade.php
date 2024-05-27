@extends('layouts.app')

@section('title', 'Laravel DC Comics')

@section('main')
<main>
    <div class="container p-4">
        <div class="series d-flex justify-content-center align-items-center">
            <h3 class="text-uppercase">
                Home
            </h3>
        </div>
        
        <div class="text-center mt-2">
            <span class="text-uppercase load-more ">load more</span>
        </div>
    </div>
</main>

@endsection