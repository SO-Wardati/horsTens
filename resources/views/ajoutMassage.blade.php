

@extends('layouts.index')
@section('Hors Tension', 'Ajouter un nouveau massage')
@section('css', 'ajoutMassage')
@section('content')

<h2 class="text-center">Ajouter un nouveau massage</h2>
<div class="container-fluid add">
    <form action="/addNewMassage" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="image">Ajouter une image</label>
            <div>
                <input type="file" id="image" name="image" value="">
            </div>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="name" value="">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="textarea" class="form-control" id="description" name="description" value="">
        </div>
        <div class="mb-3">
            <label for="slogan" class="form-label">Slogan : </label>
            <input type="text" class="form-control" id="slogan" name="slogan" value="">
        </div>
        <div class="mb-3">
            <label for="timer" class="form-label">Durée : </label>
            <input type="text" class="form-control" id="timer" name="timer" value="">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Tarif : </label>
            <input type="number" class="form-control" id="price" name="price" value="">
        </div>

        <button type="submit" class="btn btn-primary text-center">Ajouter</button>
    </form>
</div>

@endsection
