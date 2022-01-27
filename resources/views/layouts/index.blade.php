<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3c7f5856f6.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="/css/@yield('css').css">
    <title>@yield('Hors Tension')</title>
</head>

<body>
    <header>
        <a href="/"><img class="img-fluid logo" src= images\logo.png></a>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-bar ">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="massages">Massages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="soinTraditionnel">Soin traditionnel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kinesiologie">Kinésiologie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="coaching">Coaching santé</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services">Nos services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="formules">Formules et tarifs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="evenements">Evenements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="bonCadeau">Bon cadeau</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

<footer class="container-fluid">
    <hr>
    <div id="contact">
        <a href="/contact"><h2>Nous contacter</h2></a>
        <p><i class="fas fa-envelope-open-text"></i> horstension.lyon@gmail.com</p>
        <p><i class="fas fa-map-marked-alt"></i> SIRET 835133208 00016</p>
        <p><i class="fas fa-phone-square-alt"></i> 06.58.28.65.66</p>
    </div>
    <div id="reseaux">
        <a href="https://www.facebook.com/koubila.nguyen/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/hors.tension/" target="_blank"><i class="fab fa-instagram-square"></i></a>
    </div>
</footer>
<div class="container-fluid">
    <p class="copy"><i class="far fa-copyright"></i> Copyright 2022. Hors Tension</p>
</div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
