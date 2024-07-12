<!--Début de la Partie Header -->

@include('partials.header')

<!-- Fin de la Partie Header -->


<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->

    @include('partials.navbar')

    <!-- Navbar End -->


    <!-- Carousel Start -->

    @include('screens.carousel')

    <!-- Carousel End -->

    @include('screens.dg')

    <!-- About Start -->

    <!-- About End -->


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
                        <img src="assets/img/service-1.jpg" class="img-fluid w-100" alt="Image">
                        <div class="service-link">
                            <a href="{{ url ('services') }}" class="h4 mb-0">Radio Gabon</a>
                        </div>
                    </div>
                    <p class="my-4">Remplissant sa mission de trait-d'union entre les populations et d'espace démocratique, Radio Gabon est présente sur toute l'étendue du territoire national.
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="assets/img/service-2.jpg" class="img-fluid w-100" alt="Image">
                        <div class="service-link">
                            <a href="{{ url ('services') }}" class="h4 mb-0"> La Matinale</a>
                        </div>
                    </div>
                    <p class="my-4">Toute l'actualité sur le sujet La Matinale. Consultez l'ensemble des articles, reportages, directs, photos et vidéos de la rubrique La Matinale publiés par ...
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="assets/img/africa.png" class="img-fluid w-100" alt="Image">
                        <div class="service-link">
                            <a href="{{ url ('services') }}" class="h4 mb-0">Radio Diffusion</a>
                        </div>
                    </div>
                    <p class="my-4">La Radio Télévision Gabonaise actuellement en cours de réorganisation est composée de deux chaînes de radiotélévision, RTG1 (lancée en 1963) et rebaptisée ...
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="assets/img/service-4.jpg" class="img-fluid w-100" alt="Image">
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


    <!-- Donation Start -->

    <div class="container-fluid donation py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h5 class="text-uppercase text-primary">Services</h5>
                <h1 class="mb-0">Vos services favoris.</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="donation-item">
                        <img src="assets/img/donation-1.jpg" class="img-fluid w-100" alt="Image">
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
                        <img src="assets/img/service-2.jpg" class="img-fluid w-100" alt="Image">
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
                        <img src="assets/img/service-4.jpg" class="img-fluid w-100" alt="Image">
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
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="{{ url ('articles2') }}">Voir tout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Donation End -->


    <!-- Counter Start -->
    <div class="container-fluid counter py-5" style="background: linear-gradient(rgba(0, 0, 0, .4), rgba(0, 0, 0, 0.4)), url(img/volunteers-bg.jpg) center center; background-size: cover;">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h5 class="text-uppercase text-primary">Impactes de notre travail.</h5>
                <p class="text-white mb-0">Les statiques impressionnantes de la Haute Autorité de la Communication durant cette nouvelle aire de transition.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter-item text-center border p-5">
                        <i class="fas fa-thumbs-up fa-4x text-white"></i>
                        <h3 class="text-white my-4">Likes</h3>
                        <div class="counter-counting">
                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">3600</span>
                            <span class="h1 fw-bold text-primary">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter-item text-center border p-5">
                        <i class="fas fa-file-invoice-dollar fa-4x text-white"></i>
                        <h3 class="text-white my-4">Rentabilités</h3>
                        <div class="counter-counting text-center border-white w-100" style="border-style: dotted; font-size: 30px;">
                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">12345678</span>
                            <span class="h1 fw-bold text-primary">F</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter-item text-center border p-5">
                        <i class="fas fa-user fa-4x text-white"></i>
                        <h3 class="text-white my-4">Communauté</h3>
                        <div class="counter-counting text-center border-white w-100" style="border-style: dotted; font-size: 30px;">
                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">713</span>
                            <span class="h1 fw-bold text-primary">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter-item text-center border p-5">
                        <i class="fas fa-heart fa-4x text-white"></i>
                        <h3 class="text-white my-4">Aide</h3>
                        <div class="counter-counting text-center border-white w-100" style="border-style: dotted; font-size: 30px;">
                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">487</span>
                            <span class="h1 fw-bold text-primary">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Devenir partenaire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter End -->


    <!-- Causes Start -->
    <div class="container-fluid causes py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h5 class="text-uppercase text-primary">Recemment ajouté</h5>
                <h1 class="mb-4">Nos publications recemment ajoutées</h1>
                <p class="mb-0">Retrouvez dans cette rubrique toute les nouvelles actualités spécialement ajoutées afin de rester informés.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-xl-3">
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="assets/img/causes-4.jpg" class="img-fluid w-100" alt="Image">
                            <div class="causes-link pb-2 px-3">
                                <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>22/03/2024</small>
                                <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>2369</small>
                            </div>
                            <div class="causes-dination p-2">
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Actualités</a>
                            </div>
                        </div>
                        <!-- <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                <span>65%</span>
                            </div>
                        </div> -->
                        <div class="causes-content p-4">
                            <h4 class="mb-3">Gouvernement</h4>
                            <p class="mb-4">CTRI | Scolarisation de plus de 2000 enfants...</p>
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Lire plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="assets/img/causes-3.jpg" class="img-fluid w-100" alt="Image">
                            <div class="causes-link pb-2 px-3">
                                <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>22/03/2024</small>
                                <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>2032</small>
                            </div>
                            <div class="causes-dination p-2">
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Actualités</a>
                            </div>
                        </div>
                        <!-- <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                <span>85%</span>
                            </div>
                        </div> -->
                        <div class="causes-content p-4">
                            <h4 class="mb-3">Oyem :</h4>
                            <p class="mb-4">l’EPFASS officiellement inaugurée pour la formation des auxiliaires en éducation spécialisée</p>
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Lire plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="assets/img/causes-2.jpg" class="img-fluid w-100" alt="Image">
                            <div class="causes-link pb-2 px-3">
                                <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>22/03/2024</small>
                                <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>5482</small>
                            </div>
                            <div class="causes-dination p-2">
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Actualités</a>
                            </div>
                        </div>
                        <!-- <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <span>75%</span>
                            </div>
                        </div> -->
                        <div class="causes-content p-4">
                            <h4 class="mb-3">Environement.</h4>
                            <p class="mb-4">Acheminement de la route de Bamboochine imminent...</p>
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Lire plus</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3">
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="assets/img/causes-1.jpg" class="img-fluid w-100" alt="Image">
                            <div class="causes-link pb-2 px-3">
                                <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>22/03/2024</small>
                                <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>4000</small>
                            </div>
                            <div class="causes-dination p-2">
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Actualités</a>
                            </div>
                        </div>
                        <!-- <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                <span>95%</span>
                            </div>
                        </div> -->
                        <div class="causes-content p-4">
                            <h4 class="mb-3">Élections 2023</h4>
                            <p class="mb-4">La HAC lance les travaux de la Commission d’égal accès aux médias...</p>
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Lire plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Causes End -->


    <!-- Events Start -->
    <div class="container-fluid event py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                <h5 class="text-uppercase text-primary">EVENEMENTS À VENIR</h5>
                <h1 class="mb-0">Au coeur de l'information, soyez prêt pour ne rien rater.</h1>
            </div>
            @if($evenements->isEmpty())
            <p>Aucun événement trouvé.</p>
            @else
            <div class="event-carousel owl-carousel">
                @foreach($evenements->take(5) as $evenement)
                <div class="event-item">
                    <a href="{{ url('evenements/' . $evenement->id) }}">
                        @if($evenement->photo)
                        <img src="assets/{{ asset('storage/' . $evenement->photo) }}" class="img-fluid w-100" alt="Image">
                        @else
                        <img src="assets/img/events-1.jpg" class="img-fluid w-100" alt="Default Image">
                        @endif
                    </a>
                    <div class="event-content p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <span class="text-body"><i class="fas fa-map-marker-alt me-2"></i>{{ $evenement->lieu }}</span>
                            <span class="text-body"><i class="fas fa-calendar-alt me-2"></i>{{ $evenement->created_at->format('d M Y') }}</span>
                        </div>
                        <h4 class="mb-4">{{ $evenement->titre }}</h4>
                        <p class="mb-4">{{ $evenement->info }}</p>
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Lire plus</a>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
    <!-- Events End -->

    <!-- Blog Start -->

    @include('screens.blog')

    <!-- Blog End -->


    <!-- Gallery Start -->
    <div class="container-fluid gallery py-5 px-0">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">Nos avancés</h5>
            <h1 class="mb-4">Nous considérons nos avancés</h1>
        </div>
        <div class="row g-0">
            <div class="col-lg-4">
                <div class="gallery-item">
                    <img src="assets/img/gallery-2.jpg" class="img-fluid w-100" alt="">
                    <div class="search-icon">
                        <a href="img/gallery-2.jpg" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                    </div>
                    <div class="gallery-content">
                        <div class="gallery-inner pb-5">
                            <a href="#" class="h4 text-white">Plateau Télé</a>
                            <a href="#" class="text-white">
                                <p class="mb-0">Gallery Name</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/img/service-2.jpg" class="img-fluid w-100" alt="">
                    <div class="search-icon">
                        <a href="img/service-2.jpg" data-lightbox="gallery-3" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                    </div>
                    <div class="gallery-content">
                        <div class="gallery-inner pb-5">
                            <a href="#" class="h4 text-white">Emission</a>
                            <a href="#" class="text-white">
                                <p class="mb-0">Gallery Name</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="gallery-item">
                    <img src="assets/img/gallery-1.jpeg" class="img-fluid w-100" alt="">
                    <div class="search-icon">
                        <a href="img/gallery-1.jpeg" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                    </div>
                    <div class="gallery-content">
                        <div class="gallery-inner pb-5">
                            <a href="#" class="h4 text-white">Relais</a>
                            <a href="#" class="text-white">
                                <p class="mb-0">Gallery Name</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="gallery-item">
                    <img src="assets/img/service-1.jpg" class="img-fluid w-100" alt="">
                    <div class="search-icon">
                        <a href="img/service-1.jpg" data-lightbox="gallery-4" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                    </div>
                    <div class="gallery-content">
                        <div class="gallery-inner pb-5">
                            <a href="#" class="h4 text-white">Service Radio</a>
                            <a href="#" class="text-white">
                                <p class="mb-0">Gallery Name</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/img/gallery-5.jpg" class="img-fluid w-100" alt="">
                    <div class="search-icon">
                        <a href="img/gallery-5.jpg" data-lightbox="gallery-5" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                    </div>
                    <div class="gallery-content">
                        <div class="gallery-inner pb-5">
                            <a href="#" class="h4 text-white">Beauty Of Life</a>
                            <a href="#" class="text-white">
                                <p class="mb-0">Gallery Name</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Volunteers Start -->
    <div class="container-fluid volunteer py-5 mt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="volunteer-img">
                                <img src="assets/img/volunteers-1.jpg" class="img-fluid w-100" alt="Image">
                                <div class="volunteer-title">
                                    <h5 class="mb-2 text-white">Michel Brown</h5>
                                    <p class="mb-0 text-white">Agent</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="volunteer-img">
                                <img src="assets/img/volunteers-3.jpg" class="img-fluid w-100" alt="Image">
                                <div class="volunteer-title">
                                    <h5 class="mb-2 text-white">Talia MOMBO</h5>
                                    <p class="mb-0 text-white">Agent</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="volunteer-img">
                                <img src="assets/img/volunteers-2.jpg" class="img-fluid w-100" alt="Image">
                                <div class="volunteer-title">
                                    <h5 class="mb-2 text-white">Mick PAMBOU</h5>
                                    <p class="mb-0 text-white">Agent</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="volunteer-img">
                                <img src="assets/img/volunteers-4.jpg" class="img-fluid w-100" alt="Image">
                                <div class="volunteer-title">
                                    <h5 class="mb-2 text-white">Adélia ZOGHO</h5>
                                    <p class="mb-0 text-white">Agent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h5 class="text-uppercase text-primary">Contactez nos spécialistes</h5>
                    <h1 class="mb-4">En prenant l'avis d'un spécialiste, il vous sera plus facile de vous aurienter.</h1>
                    <!-- <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor. -->
                    </p>
                    <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Responsables.</p>
                    <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Spécialisés.</p>
                    <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Attentifs.</p>
                    <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Efficaces.</p>
                    <p class="text-dark mb-5"><i class=" fa fa-check text-primary me-2"></i> Engagés.</p>
                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Contactez.</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Volunteers End -->


    <!-- Footer Start -->

    @include('partials.footer')

    <!-- Footer End -->