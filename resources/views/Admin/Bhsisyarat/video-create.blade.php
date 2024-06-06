@extends('layout.masterAdmin')
@section('content')
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Tambah Video</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                                name="judul" placeholder="Masukkan Judul Video" required>
                            @error('judul')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="video" class="form-label">Video</label>
                            <input type="file" class="form-control @error('video') is-invalid @enderror" id="video"
                                name="video" accept="video/*" required>
                            @error('video')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('video.index') }}" class="btn btn-dark">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
