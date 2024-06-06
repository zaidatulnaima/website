@extends('layout.masterAdmin')
@section('content')

    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Edit Flashcard</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('flashcard.update', $flashcard->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul"
                                value="{{ $flashcard->judul }}">
                            @error('judul')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="flashcard" class="form-label">Flashcard</label>
                            <input type="file" class="form-control @error('flashcard') is-invalid @enderror" id="flashcard" name="flashcard"><br>
                            @error('flashcard')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <img src="/storage/flashcard/{{ $flashcard->flashcard }}" width="80">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $flashcard->deskripsi }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('flashcard.index') }}" class="btn btn-light">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
