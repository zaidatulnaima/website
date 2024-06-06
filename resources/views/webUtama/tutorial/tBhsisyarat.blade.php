@extends('layout.master')

@section('content')
    {{-- carousel --}}
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel Indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2"></li>
        </ol>

        <!-- Carousel Items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/img/background/bg2.jpg" class="d-block" width="100%" height="550px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/img/background/bg3.png" class="d-block" width="100%" height="550px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/img/background/bg4.gif" class="d-block" width="100%" height="550px" alt="...">
            </div>
        </div>

        <!-- Carousel Controls -->
        <a class="carousel-control-prev" href="#carouselExampleAutoplaying" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleAutoplaying" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    {{-- end carousel --}}

    <!-- flashcard Section-->
    <section class="page-section flashcard" id="flashcard">
        <div class="container">
            <!-- flashcard Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">flashcard</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="bi bi-star-fill"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- flashcard Grid Items-->
            <div class="row justify-content-center">
                <!-- flashcard Item 1-->
                @foreach ($flashcards as $flashcard)
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="flashcard-item mx-auto" data-bs-toggle="modal" data-bs-target="#flashcardModal{{ $flashcard->id }}">
                            <div class="flashcard-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="flashcard-item-caption-content text-center text-white"><i class="bi bi-plus-lg"></i></div>
                            </div>
                            <img class="img-fluid" src="/storage/flashcard/{{ $flashcard->flashcard }}" alt="...">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="page-section video" id="video">
        <div class="container">
            <!-- flashcard Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Video</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="bi bi-star-fill"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            @foreach ($videos as $video)
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <h5 class="text-bg-dark">{{ $video->judul }}</h5>
                            </div>
                            <video controls class="object-fit-cover border rounded">
                                <source src="{{ asset('/storage/video/' . $video->video) }}" type="video/mp4">
                            </video>
                            <div class="card-footer bg-dark">
                                <h6 class="text-bg-dark text-center">Corsety of youtube</h6>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

<!-- flashcard Modals-->
@foreach ($flashcards as $flashcard)
    <div class="flashcard-modal modal fade" id="flashcardModal{{ $flashcard->id }}" tabindex="-1" aria-labelledby="flashcardModal{{ $flashcard->id }}"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- flashcard Modal - Title-->
                                <h2 class="flashcard-modal-title text-secondary text-uppercase mb-0">
                                    {{ $flashcard->judul }}</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="bi bi-star-fill"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- flashcard Modal - Image-->
                                <img class="img-fluid rounded mb-5"
                                    src="/storage/flashcard/{{ $flashcard->flashcard }}" alt="..." />
                                <!-- flashcard Modal - Text-->
                                <p class="mb-4">{{ $flashcard->deskripsi }}</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

<!-- Bootstrap core JS-->

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.image-frame').addClass('frame');
        });
    </script>
@endsection
