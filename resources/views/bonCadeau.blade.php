@extends('layouts.index')
@section('Hors Tension', 'Bon cadeau')
@section('css', 'cadeau')

@section('content')
<div class="container-fluid conteneur">
    <div class="serve">
        <div class="text-center bg-light p-2">
            <h5 class=" text p-1">Par courriel ou virement bancaire</h5>
            <p class="text-justify texte">
            Il suffit de nous envoyer un mail avec la prestation désirée, le nom du bénéficiaire, vos coordonnées téléphoniques pour vous recontacter.
            Après finalisation de la commande (envoi de chèque ou virement bancaire), nous vous enverrons un chèque cadeau par la poste ou  en pdf par mail.
            </p>
            <a href="/contact"><button class="mt-3 mb-2 bouton" >Contact</button></a>
        </div>
    </div>
</div>

@endsection
