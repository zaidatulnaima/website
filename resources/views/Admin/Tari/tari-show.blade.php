@extends('layout.masterAdmin')
@section('content')
    <div class="content">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <h1>{{ $vtari->judul}}</h1>
                        </div>
                        <video controls>
                            <source src="{{ asset('/storage/vmusik/' . $vtari->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-lg-2">
                    <a href="{{ route('tari.index') }}" class="btn btn-info" title="Kembali">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
