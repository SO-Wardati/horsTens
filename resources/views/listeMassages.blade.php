
@extends('layouts.index')
@section('Hors Tension', 'La liste des massages')
@section('css', 'listeMassages')
@section('content')

<h1 class="text-center mt-3 mb-2">La liste des massages</h1>

<div class="liste">
    <table>
        <tr>
            <th>id</th>
            <th>Chemin image</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Durée</th>
            <th>Tarif en €</th>
            <th>Mettre à jour</th>
            <th>Supprimer</th>
        </tr>

        @foreach ($massage as $massage)
            <tr>
                <td>{{$massage->id}}</td>
                <td>{{$massage->image_path}}</td>
                <td>{{$massage->name}}</td>
                <td>{{$massage->description}}</td>
                <td>{{$massage->timer}}</td>
                <td>{{$massage->price}}</td>
                <td>
                <form action="/updateMassage{{$massage->id}}" method="get">
                    @csrf
                    <input type="hidden" name="id" value={{$massage->id}}>
                    <button class="btn-warning" type="submit"><i class="fas fa-pen"></i></button>
                </form>
                </td>
                <td>
                    <form action="/deleteMassage" method="post">
                        @csrf
                        <input type="hidden" name="id" value={{$massage->id}}>
                        <button class="btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    </td>



            </tr>
        @endforeach
    </table>
</div>

@endsection
