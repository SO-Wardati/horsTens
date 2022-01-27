@extends('layouts.index')
@section('Hors Tension', 'Accueil')
@section('css', 'accueil')
@section('content')


{{--bienvenue--}}
<div class="welcome container-fluid">
    <h1>BIENVENUE SUR<br>HORS TENSION</h1>
    <p>Le bien-être avant tout.</p>
</div>
{{--caroussel--}}
<div id="carouselExampleIndicators" class="carousel slide container-fluid" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images\mandala.png" class="d-block w-100" alt="mandala">
        </div>
        <div class="carousel-item">
            <img src="images\yoga.png" class="d-block w-100" alt="yoga">
        </div>
        <div class="carousel-item">
            <img src="images\sports.png" class="d-block w-100" alt="haltères">
        </div>
        <div class="carousel-item">
            <img src="images\museli.png" class="d-block w-100" alt="museli">
        </div>
        <div class="carousel-item">
        <img src="images\Chaussures.png" class="d-block w-100" alt="runner">
    </div>
    <div class="carousel-item">
        <img src="images\choux.png" class="d-block w-100" alt="choux">
    </div>
    </div>
</div>

</div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
{{--nos services--}}
<div class="container-fluid services">
    <img class="img-fluid mt-3 mb-3" src=images\massage.webp>

    <div class="liste-services container-fluid">
        <a href="nosServices"><h3>NOS SERVICES</h3></a>
        <div class="serviz">
            <div class="stars">
                @foreach ($massages as $massage )
                    <i class="far fa-star"></i>
                @endforeach
        </div>
        <div class="serv">
        @foreach ($massages as $massage )
        <p class="animate__animated  animate__backInRight animate__delay-1s" id="nom-service">{{$massage->name}}</p>
            {{--<p class="animate__animated  animate__backInLeft animate__delay-2s">{{$massage->description}}</p>--}}
        @endforeach
        </div>
    </div>
        </div>
    </div>

{{--en savoir plus--}}
<div class=" container-fluid more">
    <h3>EN SAVOIR PLUS</h3>
    <span>Le chemin vers la santé.</span>
    <p class="text-justify mt-4">
        À HORS TENSION, nous nous soucions sincèrement de votre bien-être. Depuis notre création en 2000, nous travaillons en étroite collaboration avec nos clients afin de leur fournir exactement ce dont ils ont besoin pour être en meilleure santé et se sentir mieux.
        HORS TENSION est prêt(e) à vous aider, alors faites de votre santé une priorité et contactez-nous dès aujourd'hui !
    </p>
</div>

{{-- Gallery--}}
<div class=" row container-fluid gallery">
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <img src=images\image0.png class="w-100 shadow-1-strong rounded mb-3 mt-3 img-fluid" alt="massage"/>
        <img src="images\fruits.png" class="w-100 shadow-1-strong rounded mb-3 img-fluid" alt="fruits"/>
        <img src="images\runner.gif" class="w-100 shadow-1-strong rounded mb-3 img-fluid run"alt="homme"/>
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
        <img src="images\image2.png" class="w-100 shadow-1-strong rounded mb-3 img-fluid"alt="yogui"/>
        <img src="images\image1.png" class="w-100 shadow-1-strong rounded mb-3 img-fluid"alt="couple"/>
        <img src="images\image3.png" class="w-100 shadow-1-strong rounded mb-3 img-fluid runz" alt="plat"/>
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
        <img src="images\eau.jpg" class="w-100 shadow-1-strong rounded mb-3 img-fluid" alt="eau"/>
        <img src="images\image4.png" class="w-100 shadow-1-strong rounded mb-3 img-fluid" alt="santé"/>
        <img src="images\yogui.png" class="w-100 shadow-1-strong rounded mb-3 img-fluid runs" alt="femme yoga"/>
</div>
    </div>
</div>
{{--citation Bouddha--}}
<div class="citation container-fluid">
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>" Avec nos pensées, nous créons le monde."</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Bouddha
        </figcaption>
    </figure>
</div>
@endsection
