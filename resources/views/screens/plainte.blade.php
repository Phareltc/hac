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
                <li class="breadcrumb-item"><a href="#">Démarches</a></li>
                <li class="breadcrumb-item"><a href="#">Faire une plainte</a></li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="contact p-5">
            <center>
                <div class="col-xl-8">
                    <h1 class="mb-4">Effectuer une plainte.</h1>
                    <p class="mb-4">Comment faire une plainte ? Il vous suffit simplement de remplire correctement le formulaire de demande plainte et de l'envoyer.
                    </p>
                    <form>
                        <div class="row gx-4 gy-3">
                            <div class="col-xl-6">
                                <input type="text" class="form-control bg-white border-0 py-3 px-4" placeholder="Votre Nom">
                            </div>
                            <div class="col-xl-6">
                                <input type="email" class="form-control bg-white border-0 py-3 px-4" placeholder="Votre adresse Email">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" class="form-control bg-white border-0 py-3 px-4" placeholder="Votre numéro">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" class="form-control bg-white border-0 py-3 px-4" placeholder="Motif de la plainte">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-white border-0 py-3 px-4" rows="7" cols="10" placeholder="Votre Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn-hover-bg btn btn-primary w-100 py-3 px-5" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </center>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Footer Start -->

@include('partials.footer')

<!-- Footer End -->