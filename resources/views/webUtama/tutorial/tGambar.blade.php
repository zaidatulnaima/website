<style>

    .jumbotron {
        align-items: center;
        display: flex;
        background-image: url('/assets/img/background/bg6.jpeg');
        background-size: cover;
        background-color: #898888;
        height: 300px;
        color: white;
    }
</style>

@extends('layout.master')

@section('content')
    <section class="jumbotron">
        <div class="container">
            <div class="row text-center">
                <div class="container">
                    <form class="d-flex" role="search" style="width: 70%"; heig>
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
    </section>

    <!-- flashcard Section-->
    <section class="page-section flashcard pt-3 pt-lg-5 pb-6 pb-lg-8 text-center" id="flashcard">
        <div class="container">
            <div class="row mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="col">
                    <div class="overflow-hidden">
                        <h2 class="fs-sm-5 mb-2" data-zanim-xs='{"duration":1.5,"delay":0}'>Menggambar & Melukis
                        </h2>
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-uppercase fs--1 text-black ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>
                            Kumpulan video tutorial tentang seni menggambar & melukis</p>
                    </div>
                    <div class="overflow-hidden">
                        <hr class="hr-short border-black" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- flashcard Item 1-->
                @foreach ($gambar as $tgambar)
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="flashcard-item mx-auto" data-bs-toggle="modal"
                            data-bs-target="#flashcardModal{{ $tgambar->id }}">
                            <div
                                class="flashcard-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="flashcard-item-caption-content text-center text-white"><i
                                        class="bi bi-play-circle"></i></div>
                            </div>
                            <img class="img-fluid" src="/storage/coverGambar/{{ $tgambar->cover }}" alt="...">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

<!-- flashcard Modals-->
@foreach ($gambar as $tgambar)
    <div class="flashcard-modal modal fade" id="flashcardModal{{ $tgambar->id }}" tabindex="-1"
        aria-labelledby="flashcardModal{{ $tgambar->id }}" aria-hidden="true">
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
                                    {{ $tgambar->judul }}</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="bi bi-star-fill"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- flashcard Modal - Image-->
                                <video autoplay controls class="border rounded w-100" style="margin-bottom: 20px">
                                    <source src="{{ asset('/storage/vgambar/' . $tgambar->video) }}" type="video/mp4">
                                </video>
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
