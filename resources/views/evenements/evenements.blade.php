@extends('dashboard')

@section('content')

<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

        <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
            <div class="grow">
                <h5 class="text-16">Partie évènement</h5>
            </div>
            <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                    <a href="#!" class="text-slate-400 dark:text-zink-200">Accueil</a>
                </li>
                <li class="text-slate-700 dark:text-zink-100">
                    Evènement
                </li>
            </ul>
        </div>
        <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
            <div class="xl:col-span-9">
                <div class="card">
                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show flex rounded-lg border border-success px-4 py-4 text-success sm:px-5" role="alert">
                        {{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <br>
                    <div class="card-body">
                        <h6 class="mb-4 text-15 grow">Ajouter un évènement</h6>
                        <form method="POST" action="{{ route('evenements.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-12">
                                <div class="xl:col-span-6">
                                    <label for="titre" class="inline-block mb-2 text-base font-medium">Rentrer un titre:</label>
                                    <input type="text" name="titre" id="titre" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Veuillez remplir ce champ" value="">
                                </div>
                                <div class="xl:col-span-6">
                                    <label for="lieu" class="inline-block mb-2 text-base font-medium">Renseigner un lieu:</label>
                                    <input type="text" name="lieu" id="lieu" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Veuillez remplir ce champ" value="">
                                </div>
                                <div class="md:col-span-2 xl:col-span-12">
                                    <label for="info" class="inline-block mb-2 text-base font-medium">Rentrer une en-tête:</label>
                                    <input type="info" name="lieu" id="info" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Veuillez remplir ce champ" value="">
                                </div>
                                <div class="md:col-span-2 xl:col-span-12">
                                    <label for="description" class="inline-block mb-2 text-base font-medium">Rentrer une description:</label>
                                    <textarea name="description" id="description" class="ckeditor-classic"></textarea>
                                </div>
                                <div class="xl:col-span-6">
                                    <input type="file" name="photo" class="cursor-pointer form-file border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="flex justify-end gap-2 mt-4">
                                <button type="reset" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Effacer</button>
                                <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Ajouter un service</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->

    </div>
    <!-- container-fluid -->
</div>

@endsection