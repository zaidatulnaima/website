@extends('layout.masterAdmin')
@section('content')
    <div class="content">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <h1>{{ $flashcard->judul }}</h1>
                        </div>
                        <img src="/storage/flashcard/{{ $flashcard->flashcard }}">
                        <div class="card-body">
                            <p class="card-text">{{ $flashcard->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <a href="{{ url('/bhsIsyarat/flashcard') }}" class="btn btn-info" title="Tambah flashcard">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    @endsection
