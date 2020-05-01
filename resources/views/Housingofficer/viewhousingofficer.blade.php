@extends ('layouts.master')

@section('title')
    View Admins
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">Registered HousingOfficer</h4>
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>Housing Officer ID</th>
                            <th>Full Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>DELETE</th>
                        </thead>
                        <tbody>
                            @foreach ($housingofficers as $user)
                            <tr>
                                <td>{{ $user->id}}</td>
                                <td>{{ $user->fullname}}</td>
                                <td>{{ $user->username}}</td>
                                <td>{{ $user->email}}</td>
                                <td><a href="/deletehousingofficers{{$user->id}}" class="btn btn-warning">DELETE</a></td>         
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection