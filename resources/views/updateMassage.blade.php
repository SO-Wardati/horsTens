

@extends('layouts.index')
@section('Hors Tension', 'Modifier')
@section('css', 'ajoutMassage')
@section('content')

<h2 class="text-center">Ajouter un nouveau massage</h2>
<div class="container-fluid add">
    <form action="/updateMassage" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="image">Ajouter une image</label>
            <div>
                <input type="file" id="image" name="image" value="{{ Storage::url($massage->image_path)}}">
            </div>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $massage->name}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="textarea" class="form-control" id="description" name="description" value="{{ $massage->description}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Durée : </label>
            <input type="text" class="form-control" id="timer" name="timer" value="{{ $massage->timer}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Tarif : </label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $massage->price}}">
        </div>

        <button type="submit" class="btn btn-warning text-center">Modifier</button>
    </form>
</div>

@endsection
