@extends('layout.masterAdmin')
@section('content')
    <div class="content">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <h1>{{ $gambar->judul}}</h1>
                        </div>
                        <video controls>
                            <source src="{{ asset('/storage/vgambar/' . $gambar->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-lg-2">
                    <a href="{{ route('gambar.index') }}" class="btn btn-info" title="Kembali">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
