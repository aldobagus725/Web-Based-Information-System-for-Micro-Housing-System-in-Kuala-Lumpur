@extends ('layouts.master')

@section('title')
    Edit Applicant
@endsection
@section('content')
<div class="container">
        <div class="jumbotron">
                    Edit Applicant 
                </div>
            </div>
                <div class="container">
                    <div class="row">
                        @foreach($applicants as $user)
                        <div class="col">
                        <form action="/updateapplicant{{$user->id}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                                <div class="form-group">
                                <label> Applicant ID</label>
                                    <td><input type="text" name="id" value="{{$user->id}}" readonly></td>
                                </div>
                                      
                                <div class="form-group">
                                <label> Full Name </label>
                                    <td><input type="text" name="fullname" value="{{$user->fullname}}" required></td>
                                 </div>

                                <div class="form-group">
                                <label> Username </label>
                                    <td><input type="text" name="username" value="{{$user->username}}" required></td>
                                </div>

                                <div class="form-group">
                                <label> Monthly Income (Malaysian Ringgit) </label>
                                     <td><input type="text" name="monthlyIncome" value="{{$user->monthlyIncome}}" required></td>
                                </div>
                                <br><br>
                                    <button type="submit" name="submit" class="btn btn-primary"> Update Application </button>
                            </form>
                        </div>
                        @endforeach
                    </div>
@endsection
@section('scripts')
@endsection
