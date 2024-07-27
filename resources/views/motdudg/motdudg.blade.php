@extends('dashboard')

@section('content')

<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

        <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
            <div class="grow">
                <h5 class="text-16">Ajouter une description</h5>
            </div>
            <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                    <a href="#!" class="text-slate-400 dark:text-zink-200">Mot du Directeur</a>
                </li>
                <li class="text-slate-700 dark:text-zink-100">
                    Ajouter une description
                </li>
            </ul>
        </div>
        <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
            <div class="xl:col-span-9">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">A propos de la Haute Autorité de la Communication</h6>

                        <form method="POST" action="{{ route('motdudg.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                                <div class="xl:col-span-8">
                                    <label for="nomdg" class="inline-block mb-2 text-base font-medium">Nom du Directeur Général</label>
                                    <input name="nomdg" type="text" id="nomdg" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Nom du Directeur" required>
                                    <p class="mt-1 text-sm text-slate-400 dark:text-zink-200">Veuillez rentrer le nom complet du Directeur.</p>
                                </div>
                                <div class="lg:col-span-2 xl:col-span-6">
                                    <div>
                                        <label for="description" class="inline-block mb-2 text-base font-medium">Description</label>
                                        <textarea name="description" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="description" placeholder="Rentrer la description de la HAC" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="lg:col-span-2 xl:col-span-6">
                                    <div>
                                        <label for="infodg" class="inline-block mb-2 text-base font-medium">A propos du Directeur Général</label>
                                        <textarea name="infodg" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="infodg" placeholder="Rentrer la biographie du Directeur" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="lg:col-span-2 xl:col-span-6">
                                    <div>
                                        <label for="mission" class="inline-block mb-2 text-base font-medium">Missions de la HAC</label>
                                        <textarea name="mission" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="mission" placeholder="Rentrer la mission de la HAC" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="lg:col-span-2 xl:col-span-6">
                                    <div>
                                        <label for="vision" class="inline-block mb-2 text-base font-medium">Vision de la HAC</label>
                                        <textarea name="vision" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="vision" placeholder="Rentrer la vision de la HAC" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="lg:col-span-2 xl:col-span-12">
                                    <label for="photo" class="inline-block mb-2 text-base font-medium">Photo du Directeur Général</label>
                                    <div class="flex items-center justify-center bg-white border border-dashed rounded-md cursor-pointer dropzone border-slate-300 dark:bg-zink-700 dark:border-zink-500 dropzone2">
                                        <div class="fallback">
                                            <input name="photo" type="file">
                                        </div>
                                        <div class="w-full py-5 text-lg text-center dz-message needsclick">
                                            <div class="mb-3">
                                                <i data-lucide="upload-cloud" class="block mx-auto size-12 text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                                            </div>
                                            <h5 class="mb-0 font-normal text-slate-500 dark:text-zink-200 text-15">Glisser et déposez la photo du Directeur</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8">
                                <button type="submit" class="btn inline-flex items-center justify-center gap-2 ltr:ml-auto rtl:mr-auto ltr:rounded-l-none rtl:rounded-r-none bg-custom-600 hover:bg-custom-700 text-white ltr:rounded-r-md rtl:rounded-l-md h-10 text-sm font-medium dark:bg-custom-800 dark:hover:bg-custom-900">
                                    <i class="text-sm leading-none" data-lucide="save"></i>
                                    Enregistrer
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection