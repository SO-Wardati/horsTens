@extends('layouts.index')
@section('Hors Tension', 'Contact')
@section('css', 'contact')
@section('content')

<div class="container-fluid my-5">
    <h4></h4>
</div>
<div class="container-fluid justify-content-spacearound row mt-2 contact">
    <div class="col-md-6 image-contact">
        <img class="img-fluid" src="/images/massage.jpg" class="img-fluid" alt="massages">
    </div>
    <div class="col-md-6 padForm">
        <form action="/sendmail" method ="post">
            @csrf
            <div class="form-group formula">
                <label for="exampleFormControlInput1">Nom Prénom</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="name">
            </div>
            <div class="form-group formula">
                <label for="exampleFormControlInput1">Numéro de téléphone</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="phonenumber">
            </div>
            <div class="form-group formula">
                <label for="exampleFormControlInput1">E-mail</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
            </div>
            <div class="form-group formula">
                <label for="exampleFormControlTextarea1">Votre Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
            </div>
            <div class="bouton0 formula text-center">
                <button type="submit" class="btn bouton">Envoyer</button>
            </div>
        </form>
    </div>
</div>

@endsection
