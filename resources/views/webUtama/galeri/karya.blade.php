<style>
    .jumbotron {
        align-items: center;
        display: flex;
        background-image: url('/assets/img/background/back1.jpg');
        background-size: cover;
        background-color: #898888;
        height: 500px;
        color: white;
    }
</style>

@extends('layout.master')

@section('content')
    <section class="jumbotron">
        <div class="container">
            <div class="row text-center">
                <div class="container">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p>{{ $message }}</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        Tambah Karya Video
                    </button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        Tambah Karya Gambar
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- flashcard Section-->
    <section class="page-section flashcard pt-3 pt-lg-5 pb-6 pb-lg-8 text-center" id="flashcard">
        <div class="container">
            <div class="row mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="col">
                    <div class="overflow-hidden">
                        <h2 class="fs-sm-5 mb-2" data-zanim-xs='{"duration":1.5,"delay":0}'>Gallery
                        </h2>
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-uppercase fs--1 text-black ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>
                            Kumpulan Karya Gambar</p>
                    </div>
                    <div class="overflow-hidden">
                        <hr class="hr-short border-black" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- flashcard Item 1-->
                @foreach ($karya as $galeri)
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card bg-dark text-bg-dark">
                            <div class="card-header">
                                <h5 class="text-center">{{ $galeri->judul }}</h5>
                            </div>
                            <img src="{{ asset('/storage/gambar/' . $galeri->gambar) }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h4 class="card-text">Karya : {{ $galeri->pencipta }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- flashcard Section-->
    <section class="page-section flashcard pt-3 pt-lg-5 pb-6 pb-lg-8 text-center" id="flashcard">
        <div class="container">
            <div class="row mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="col">
                    <div class="overflow-hidden">
                        <h2 class="fs-sm-5 mb-2" data-zanim-xs='{"duration":1.5,"delay":0}'>Gallery
                        </h2>
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-uppercase fs--1 text-black ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>
                            Kumpulan Karya Video</p>
                    </div>
                    <div class="overflow-hidden">
                        <hr class="hr-short border-black" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- flashcard Item 1-->
                @foreach ($karya as $galeri)
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card bg-dark text-bg-dark">
                            <div class="card-header">
                                <h5 class="text-center">{{ $galeri->judul }}</h5>
                            </div>
                            <video controls>
                                <source src="{{ asset('/storage/vkarya/' . $galeri->video) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="card-body">
                                <h4 class="card-text">Karya : {{ $galeri->pencipta }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Karyamu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('karya.vid.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="pencipta" class="form-label">pencipta</label>
                            <input type="text" class="form-control @error('pencipta') is-invalid @enderror"
                                id="pencipta" name="pencipta">
                            @error('pencipta')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                                name="judul" placeholder="Masukkan Judul Flashcard">
                            @error('judul')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="video" class="form-label">Video</label>
                            <input type="file" class="form-control @error('video') is-invalid @enderror"
                                id="video" name="video" accept="video/*">
                            @error('video')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Karyamu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('karya.gbr.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="pencipta" class="form-label">pencipta</label>
                            <input type="text" class="form-control @error('pencipta') is-invalid @enderror"
                                id="pencipta" name="pencipta">
                            @error('pencipta')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                id="judul" name="judul" placeholder="Masukkan Judul Flashcard">
                            @error('judul')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                id="gambar" name="gambar" accept="gambar/*">
                            @error('gambar')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
