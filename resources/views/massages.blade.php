@extends('layouts.index')
@section('Hors Tension', 'Massages')
@section('css', 'massages')

@section('content')
<div class="boite">
    <div class="ancre"><a href="#massage-table">Massage table</a></div>

{{--massage assis--}}
    <div class=" container-fluid conteneur-1">
        <div class="assis" id="massage-assis">
            <h3 class="mb-2 text-center">{{$massages[0]->name}}</h3>
            <p class="text-justify">{{$massages[0]->description}}</p>
            <button class="bouton"><a href= "/contact">Réserver</a></button>
        </div>
        <div class="imag">
            <img class="img-fluid image"src="{{ Storage::url($massages[0]->image_path) }}" alt="massage">
            <button class="bouton-2"><a href= "/contact">Réserver</a></button>
        </div>
    </div>
    {{--massge sur table--}}
    <div class="container-fluid conteneur-2">
        <div class="assiz" id="massage-table">
            <h3 class="mb-2 text-center">{{$massages[1]->name}}</h3>
            <p class="text-justify">{{$massages[1]->description}}</p>
            <button class="bouton"><a href= "/contact">Réserver</a></button>
        </div>
        <div class="imag">
            <img class="img-fluid image"src="{{ Storage::url($massages[1]->image_path) }}" alt="massage">
            <button class="bouton-2"><a href= "/contact">Réserver</a></button>
        </div>
    </div>
    <div class="ancre text-center">
        <a href="#massage-assis">Massage assis</a>
    </div>
</div>
@endsection
