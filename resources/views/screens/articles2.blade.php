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

<!-- Début Donation -->

<div class="container-fluid donation py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h5 class="text-uppercase text-primary">Services</h5>
                <h1 class="mb-0">Vos services favoris.</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="donation-item">
                        <img src="img/donation-1.jpg" class="img-fluid w-100" alt="Image">
                        <div class="donation-content d-flex flex-column">
                            <h5 class="text-uppercase text-primary mb-4">Emissions Télévisées</h5>
                            <a href="#" class="btn-hover-color display-6 text-white">Sucré Salé</a>
                            <h4 class="text-white mb-4">Votre programme de réconciliation</h4>
                            <p class="text-white mb-4">Retrouvez votre programme de réconciliation présenté par Annie Charmelle OVOLO...</p>
                            <div class="donation-btn d-flex align-items-center justify-content-start">
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="{{ url ('articles2') }}">Voir !</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="donation-item">
                        <img src="img/service-2.jpg" class="img-fluid w-100" alt="Image">
                        <div class="donation-content d-flex flex-column">
                            <h5 class="text-uppercase text-primary mb-4">Emissions Radio</h5>
                            <a href="#" class="btn-hover-color display-6 text-white">Matinal</a>
                            <h4 class="text-white mb-4">La bonne info</h4>
                            <p class="text-white mb-4">Faites le plein de bone hummeures avec Bruce WALKER MAPOMA</p>
                            <div class="donation-btn d-flex align-items-center justify-content-start">
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="{{ url ('articles2') }}">Voir !</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="donation-item">
                        <img src="img/service-4.jpg" class="img-fluid w-100" alt="Image">
                        <div class="donation-content d-flex flex-column">
                            <h5 class="text-uppercase text-primary mb-4">Emissions Télévisées</h5>
                            <a href="#" class="btn-hover-color display-6 text-white"></a>
                            <h4 class="text-white mb-4">Gabon ECO</h4>
                            <p class="text-white mb-4">Émission à retrouver sur les réseaux sociaux de la chaîne de télévision Gabon 24...</p>
                            <div class="donation-btn d-flex align-items-center justify-content-start">
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="{{ url ('articles2') }}">Voir !</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="{{ url ('articles2') }}">All Donation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Fin Donation -->


<!-- Footer Start -->

@include('partials.footer')

<!-- Footer End -->