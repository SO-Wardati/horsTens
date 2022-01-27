

@extends('layouts.index')
@section('Hors Tension', 'Ajouter un nouvel évenement')
@section('css', 'ajoutMassage')
@section('content')

<h2 class="text-center">Ajouter un nouvel évenement</h2>
<div class="container-fluid add">
    <form action="/addNewEvent" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="image">Ajouter une image</label>
            <div>
                <input type="file" id="image" name="image" value="">
            </div>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title" name="title" value="">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="textarea" class="form-control" id="description" name="description" value="">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Date : </label>
            <input type="date" class="form-control" id="date" name="date" value="">
        </div>
        <div class="mb-3">
            <label for="place" class="form-label">Lieu : </label>
            <input type="text" class="form-control" id="place" name="place" value="">
        </div>

        <button type="submit" class="btn btn-primary text-center">Ajouter</button>
    </form>
</div>

@endsection
