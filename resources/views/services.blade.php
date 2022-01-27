@extends('layouts.index')
@section('Hors Tension', 'Nos services')
@section('css', 'services')
@section('content')


<h2 class="text-center"> Nos services</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
        <div class="col">
        @foreach ($massages as $massage)
        <div class="card cart">
            <img class="size-img img-fluid" src="{{ Storage::url($massage->image_path) }}" class="card-img-top"
            alt="photo">
            <div class="card-body infos">
                <h5 class="titre text-center">{{ $massage->name }}</h5>
                <hr>
                <p class=" card-text description text-center">{{ $massage->timer }}</p>
                <p class="card-text description text-center">{{ $massage->price }} €</p>
                <a href="/contact" ><button class="bouton">Réserver</button></a>
            </div>
            </div>
        </div>
    @endforeach
    </div>

@endsection
