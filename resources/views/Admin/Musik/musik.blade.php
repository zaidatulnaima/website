@extends('layout.masterAdmin')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h1 class="text-header">Data Video Tutorial Musik</h1>
                </div>
                <div class="col-lg-2">
                    <a href="{{ url('/musik/create') }}" class="btn btn-primary" title="Tambah video">
                        Tambah Video
                    </a>
                </div>
            </div>
            <br>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>{{ $message }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-bordered table-striped" id="videosTable">
                <thead class="text-center">
                    <tr>
                        <th>No.</th>
                        <th>Cover</th>
                        <th>Judul</th>
                        <th>Video</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($vmusik as $musik)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('/storage/cover/' . $musik->cover) }}" width="80" height="80"
                                    class="img img-responsive">
                            </td>
                            <td>{{ $musik->judul }}</td>
                            <td>
                                <video width="200" height="150" controls>
                                    <source src="{{ asset('/storage/vmusik/' . $musik->video) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </td>
                            <td>
                                <a href="{{ route('musik.show', $musik->id) }}" class="btn btn-info">Detail</a>
                                <a href="{{ route('musik.edit', $musik->id) }}" class="btn btn-warning">Edit</a>
                                <button onclick="handleDelete({{ $musik->id }})" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $vmusik->links() }}
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor"
                        class="bi bi-exclamation-circle" viewBox="0 0 16 16" style="color: #ffcc00">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                    </svg> <br><br>
                    <h1><strong>HAPUS</strong></h1>
                    <h5>Apakah anda yakin?</h5><br>
                    <form action="{{ route('musik.destroy', $musik->id ?? '') }}" method="POST">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Ya! hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function handleDelete(id) {
            $('#deleteModal').modal('show')
        }
    </script>
@endsection
