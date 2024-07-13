<!--Début de la Partie Header -->

@include('partials.header')

<!-- Fin de la Partie Header -->

<!-- Navbar start -->

@include('partials.navbar')

<!-- Navbar End -->

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Toutes nos activités</h1>
            <!-- <p class="fs-5 text-white mb-4">Help today because tomorrow you may be the one who needs more helping!</p> -->
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item"><a href="#">Documentations</a></li>
                <li class="breadcrumb-item active text-white">Audiovisuel et Radio</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- Services Start -->

<div class="container-fluid service py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">Ce que nous faisons</h5>
            <h1 class="mb-0">Nos service Audiviseuls et Radio</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="service-item">
                    <img src="img/service-1.jpg" class="img-fluid w-100" alt="Image">
                    <div class="service-link">
                        <a href="{{ url ('services') }}" class="h4 mb-0">Radio Gabon</a>
                    </div>
                </div>
                <p class="my-4">Remplissant sa mission de trait-d'union entre les populations et d'espace démocratique, Radio Gabon est présente sur toute l'étendue du territoire national.
                </p>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="service-item">
                    <img src="img/service-2.jpg" class="img-fluid w-100" alt="Image">
                    <div class="service-link">
                        <a href="{{ url ('services') }}" class="h4 mb-0"> La Matinale</a>
                    </div>
                </div>
                <p class="my-4">Toute l'actualité sur le sujet La Matinale. Consultez l'ensemble des articles, reportages, directs, photos et vidéos de la rubrique La Matinale publiés par ...
                </p>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="service-item">
                    <img src="img/africa.png" class="img-fluid w-100" alt="Image">
                    <div class="service-link">
                        <a href="{{ url ('services') }}" class="h4 mb-0">Radio Diffusion</a>
                    </div>
                </div>
                <p class="my-4">La Radio Télévision Gabonaise actuellement en cours de réorganisation est composée de deux chaînes de radiotélévision, RTG1 (lancée en 1963) et rebaptisée ...
                </p>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="service-item">
                    <img src="img/service-4.jpg" class="img-fluid w-100" alt="Image">
                    <div class="service-link">
                        <a href="{{ url ('services') }}" class="h4 mb-0">Gabon Eco</a>
                    </div>
                </div>
                <p class="my-4">Émission à retrouver sur les réseaux sociaux de la chaîne de télévision Gabon 24, à savoir Facebook et YouTube...
                </p>
            </div>
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-center">
                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Lire plus</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services End -->

<!-- Footer Start -->

@include('partials.footer')

<!-- Footer End -->