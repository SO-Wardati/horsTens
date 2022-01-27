@extends('layouts.index')
@section('Hors Tension', 'Formules et tarifs')
@section('css', 'formule')
@section('content')
<div class=" container-fluid row mt-4 mb-5">
    <h4 class="text-center titre">Choisissez votre formule.</h4>
    @foreach ($formulas as $formula)
    <div class="card carte">
        <div class="card-body carte-B">
            <h5 class="card-title text-center c-titre"> 10 {{$formula->name}}</h5>
            <p class="text-center price">{{$formula->price}} €</p>
            <p class="card-text text-center">Valable {{$formula->valid}}</p>
            <a href="/contact" ><button class="bouton">Réserver</button></a>
        </div>
    </div>
    @endforeach
    <div class="card carte">
        <div class="card-body carte-B">
            <h5 class="card-title text-center c-titre">Coaching bien-être</h5>
            <p class="text-center price">50€</p>
            <span class="text-center mb-1">par semaine</span>
            <p class="card-text text-center">Valable 8 semaines</p> <span class="text-center">+ 7 jours d'essai gratuit</span>
            <a href="/contact" ><button class="bouton">Réserver</button></a>
        </div>
</div>
@endsection
