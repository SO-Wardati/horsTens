@extends('layouts.index')
@section('Hors Tension', 'Evenements')
@section('css', 'evenement')
@section('content')

<div class="card-group ">
    <div class="row container-fluid border-collapse: separate;">
        @foreach ($events as $event)
            <div class="card col-sm-4 ">
                <img class="size-img" src="{{ Storage::url($event->image_path) }}" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-text">{{ $event->description }}</p>
                    <p class="card-text"> Le {{ $event->date }}</p>
                    <p class="card-text"> À {{ $event->place }}</p>


                </div>
            </div>
            @endforeach
    </div>
</div>
@endsection
