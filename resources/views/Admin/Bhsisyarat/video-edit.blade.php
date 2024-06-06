@extends('layout.masterAdmin')
@section('content')
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Edit Video</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('video.update', ['video' => $video->id]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                                name="judul" value="{{ $video->judul }}">
                            @error('judul')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="video" class="form-label">Video</label>
                            <input type="file" class="form-control @error('video') is-invalid @enderror" id="video"
                                name="video"><br>
                            @error('video')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <video src="/storage/video/{{ $video->video }}" width="80"></video>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('video.index') }}" class="btn btn-light">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
