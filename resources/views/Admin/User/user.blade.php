@extends('layout.masterAdmin')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h1 class="text-header">Data User</h1>
                </div>
            </div>
            <br>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>{{ $message }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-bordered table-striped" id="">
                <thead class="text-center">
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                  @php $no=0; @endphp
                  @foreach ($users as $user)
                  @php $no++; @endphp
                        <tr>
                           <td>{{ $no }}</td>
                           <td>{{ $user['username'] }}</td>
                           <td>{{ $user['email'] }}</td>
                           <td>{{ $user['password'] }}</td>
                           <td>{{ $user['created_at'] }}</td>
                           <td>{{ $user['updated_at'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
