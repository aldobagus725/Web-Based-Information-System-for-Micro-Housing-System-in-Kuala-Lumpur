@extends ('layouts.master')
@section('title')
    Edit Housing Officer
@endsection
@section('content')
<div class="container">
    <div class="card-header ">
        <h4 class="card-title">Edit Housing Officer</h4>
    </div>
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                @foreach($housingofficers as $user)
                <div class="col">
                    <form action="/updatehousingofficer{{$user->id}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <table class="table table-hover">
                            <tr>
                                <th><label> Housing Officer ID</label></th>
                                <td><input type="text" class="form-control" name="id" value="{{$user->id}}" readonly></td>
                            </tr>
                            <tr>
                                <th><label><label> Full Name </label></label></th>
                                <td><input type="text" class="form-control" name="fullname" value="{{$user->fullname}}" required></td>
                            </tr>
                            <tr>
                                <th><label> Username </label></th>
                                <td><input type="text" class="form-control" name="username" value="{{$user->username}}" required></td>
                            </tr>
                            <tr>
                                <th><label> Email </label></th>
                                <td><input type="email" class="form-control" name="email" value="{{$user->email}}" required></td>
                            </tr>
                        </table>
                            <br><br>
                    <button type="submit" name="submit" class="btn btn-primary"> Update Data</button>
                    </form>
                        </div>
                        @endforeach
                    </div>
@endsection
@section('scripts')
@endsection

