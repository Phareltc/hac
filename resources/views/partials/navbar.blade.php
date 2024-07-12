            <!-- Navbar start -->
            <div class="container-fluid fixed-top px-0">
                <div class="container px-0">
                    <!-- <div class="topbar">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-8">
                                <div class="topbar-info d-flex flex-wrap">
                                    <a href="#" class="text-light me-4"><i class="fas fa-envelope text-white me-2"></i>Example@gmail.com</a>
                                    <a href="#" class="text-light"><i class="fas fa-phone-alt text-white me-2"></i>+01234567890</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="topbar-icon d-flex align-items-center justify-content-end">
                                    <a href="#" class="btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>
                                    <a href="#" class="btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <nav class="navbar navbar-light bg-light navbar-expand-xl">
                        <a href="/" class="navbar-brand ms-3">
                            <img src="assets/img/logo.png" width="70px" class="img-fluid" alt="Image">
                        </a>
                        <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="fa fa-bars text-primary"></span>
                        </button>
                        <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                            <div class="navbar-nav ms-auto">
                                <a href="/" class="nav-item nav-link active">Accueil</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Démarches</a>
                                    <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                        <a href="{{ url ('plainte') }}" class="dropdown-item">Faire une plainte</a>
                                        <!-- <a href="gallery.html" class="dropdown-item">???</a> -->
                                    </div>
                                </div>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Documentations</a>
                                    <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                        <a href="{{ url ('articles') }}" class="dropdown-item">Textes juridiques</a>
                                        <a href="{{ url ('articles') }}" class="dropdown-item">Décrets</a>
                                        <a href="{{ url ('services') }}" class="dropdown-item">Audiovisiel et Radio</a>
                                    </div>
                                </div>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Rapports et Formations</a>
                                    <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                        <a href="{{ url ('evenements') }}" class="dropdown-item">Rapports d'activité</a>
                                        <a href="{{ url ('evenements') }}" class="dropdown-item">Formations</a>
                                    </div>
                                </div>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">H.A.C Gabon</a>
                                    <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                        <a href="{{ url ('about') }}" class="dropdown-item">Organisation</a>
                                        <a href="{{ url ('about') }}" class="dropdown-item">missions</a>
                                        <a href="{{ url ('about') }}" class="dropdown-item">A propos</a>
                                    </div>
                                </div>
                                <a href="{{ url ('contact') }}" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
                                <a href="{{ url ('plainte') }}" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">Faire une plainte</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Navbar End -->