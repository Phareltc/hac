<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg" data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

@include('partials.head')

<body class="flex items-center justify-center min-h-screen py-16 lg:py-10 bg-slate-50 dark:bg-zink-800 dark:text-zink-100 font-public">

    <div class="relative">

        <div class="mb-0 w-screen lg:w-[500px] card shadow-lg border-none shadow-slate-100 relative">
            <div class="!px-10 !py-12 card-body">
                <a href="#!">
                    <img src="assets/images/logo.png" alt="" class="hidden h-6 mx-auto dark:block">
                    <img src="assets/images/logo.png" alt="" class="block h-6 mx-auto dark:hidden">
                </a>

                <div class="mt-8 text-center">
                    <h4 class="mb-1 text-custom-500 dark:text-custom-500">Create your free account</h4>
                    <p class="text-slate-500 dark:text-zink-200">Get your free starcode account now</p>
                </div>

                <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data" class="mt-10" id="registerForm">
                    @csrf
                    <div class="mb-3">
                        <label for="nom" class="inline-block mb-2 text-base font-medium">Nom</label>
                        <input type="text" id="nom" name="nom" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Entrez votre nom" autocomplete="family-name">
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="inline-block mb-2 text-base font-medium">Prénom</label>
                        <input type="text" id="prenom" name="prenom" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Entrez votre prénom" autocomplete="given-name">
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="inline-block mb-2 text-base font-medium">Genre</label>
                        <select id="genre" name="genre" class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800" autocomplete="sex">
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tel" class="inline-block mb-2 text-base font-medium">Téléphone</label>
                        <input type="tel" id="tel" name="tel" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Entrez votre numéro de téléphone" autocomplete="tel">
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="inline-block mb-2 text-base font-medium">Photo</label>
                        <input type="file" id="photo" name="photo" accept="image/*" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="inline-block mb-2 text-base font-medium">Email</label>
                        <input type="email" id="email" name="email" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Entrez votre email" autocomplete="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="inline-block mb-2 text-base font-medium">Mot de passe</label>
                        <input type="password" id="password" name="password" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Entrez votre mot de passe" autocomplete="new-password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="inline-block mb-2 text-base font-medium">Confirmer le mot de passe</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Confirmez votre mot de passe" autocomplete="new-password">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="terms" name="terms">
                            <label class="form-check-label" for="terms">
                                J'accepte les <a href="javascript:void(0);" class="underline">termes et conditions</a>
                            </label>
                        </div>
                    </div>
                    <div class="mt-10">
                        <button type="submit" class="w-full text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">S'inscrire</button>
                    </div>

                    <div class="mt-10 text-center">
                        <p class="mb-0 text-slate-500 dark:text-zink-200">Already have an account ? <a href="login" class="font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500">Se connecter</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src='assets/libs/choices.js/public/assets/scripts/choices.min.js'></script>
    <script src="assets/libs/%40popperjs/core/umd/popper.min.js"></script>
    <script src="assets/libs/tippy.js/tippy-bundle.umd.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/prismjs/prism.js"></script>
    <script src="assets/libs/lucide/umd/lucide.js"></script>
    <script src="assets/js/starcode.bundle.js"></script>
    <script src="assets/js/pages/auth-register.init.js"></script>

</body>

</html>