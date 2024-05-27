@extends('layouts.app')

@section('title', 'Laravel Comics')

@section('main')
<div class="container p-4">
    <div class="series d-flex justify-content-center align-items-center">
        <h3 class="text-uppercase">
            current series
        </h3>
    </div>
    <div class="row ">
        @include('partials.card')
    </div>
    <div class="text-center mt-2">
        <span class="text-uppercase load-more ">load more</span>
    </div>
</div>

@endsection