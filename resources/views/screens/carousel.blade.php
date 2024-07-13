<div class="container-fluid carousel-header vh-100 px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($evenements as $index => $evenement)
            <li data-bs-target="#carouselId" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            @php
            $isFirstSlide = true;
            @endphp
            @forelse ($evenements as $evenement)
            <div class="carousel-item {{ $isFirstSlide ? 'active' : '' }}">
                <img src="{{ asset('storage/' . $evenement->photo) }}" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-1 text-capitalize text-white mb-4">{{ $evenement->titre }}</h1>
                        <p class="mb-5 fs-5">{{ $evenement->info }}</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#">Lire plus</a>
                        </div>
                    </div>
                </div>
            </div>
            @php
            $isFirstSlide = false;
            @endphp
            @empty
            <div class="carousel-item active">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-1 text-capitalize text-white mb-4">Aucun événement</h1>
                        <p class="mb-5 fs-5">Il n'y a pas d'événement pour le moment.</p>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédant</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>
</div>