<!--Début de la Partie Header -->

@include('partials.header')

<!-- Fin de la Partie Header -->

<!-- Navbar start -->

@include('partials.navbar')

<!-- Navbar End -->



<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">A propos de la HAC</h1>
            <!-- <p class="fs-5 text-white mb-4">Help today because tomorrow you may be the one who needs more helping!</p> -->
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item"><a href="#">H.A.C Gabon</a></li>
                <li class="breadcrumb-item active text-white">A propos</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid about  py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-5">
                <div class="h-100">
                    <img src="img/logo.png" class="img-fluid w-100 h-100" alt="Image">
                </div>
            </div>
            <div class="col-xl-7">
                <h5 class="text-uppercase text-primary">A propos de la HAC</h5>
                <h1 class="mb-4"></h1>
                <p class="fs-5 mb-4">
                </p>
                <div class="tab-class bg-secondary p-4">
                    <ul class="nav d-flex mb-2">
                        <li class="nav-item mb-3">
                            <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;">La HAC</span>
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 150px;">Missions</span>
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 150px;">Visions</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            <h5 class="text-uppercase mb-3">A propos de la HAC</h5>
                                            <p class="mb-4">La Haute autorité de la communication (abrégé en HCA) est l'organisme guinéen de régulation de la communication.
                                                Elle a été mise en place le 22 juin 2010 , en remplacement de l'ancien Conseil national de la communication
                                                et dans le cadre de la transparence et le pluralisme de la presse guinéenne.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-start">
                                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Lire plus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            <h5 class="text-uppercase mb-3">Des Missions</h5>
                                            <p class="mb-4">La Haute Autorité de la Communication a pour mission la régulation du secteur
                                                de la communication audiovisuelle, cinématographique, écrite, numérique et de la publicité.
                                                À ce titre, elle est notamment chargée de veiller, en toute indépendance et impartialité,
                                                conformément aux dispositions des textes en vigueur.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-start">
                                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Lire plus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            <h5 class="text-uppercase mb-3">La vision de la HAC</h5>
                                            <p class="mb-4">Notre vision est de forger une institution résiliente,
                                                prête à défier les défis du temps présent et à anticiper ceux du futur.
                                                Nous aspirons à léguer à la postérité une entité non seulement mieux structurée,
                                                mais aussi habilement équipée et constamment enrichie par une formation de pointe.
                                                Dans un monde marqué par des mutations incessantes, notre engagement est de maintenir
                                                l'équilibre et la stabilité de notre planète, en faisant de notre institution un pilier solide et adaptable,
                                                prêt à répondre avec agilité aux évolutions rapides qui façonnent notre avenir collectif.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-start">
                                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Lire plus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Footer Start -->

@include('partials.footer')

<!-- Footer End -->