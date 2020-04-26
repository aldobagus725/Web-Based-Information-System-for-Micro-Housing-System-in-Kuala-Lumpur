@extends ('layouts.master')

@section('title')
    Edit Application
@endsection


@section('content')
<<<<<<< HEAD
<div class="container">
        <div class="jumbotron">
                    Edit Application 
=======
<div class="container-fluid contents">
            <div id="home" class="row clearfix" data-ibg-bg="{{ asset('assets/img/15.jpg') }}">
                <div class="title-home">
                    Edit Application
>>>>>>> 7285197afdd08f63df168af5eac1219377590153
                </div>
            </div>
            <div id="residence" class="row p-5">
                <div class="container">
                    <div class="row">
<<<<<<< HEAD
                        @foreach($application as $r)
                        <div class="col">
                        <form action="/updateapplication{{$r->applicationID}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                                <div class="form-group">
                                <label> User ID </label>
                                    <td><input type="text" name="userID" value="{{ Auth::user()->id }}"></td>
                                </div>
                                      
                                <div class="form-group">
                                <label> Residence ID </label>
                                    <td><input type="text" name="residenceID" value="{{ $r->residenceID }}"></td>
                                 </div>

                                 <div class="form-group">
                                <label> Required Month </label>
                                    <td><input type="text" name="requiredMonth" required="required" placeholder="E.g. May, June..."></td>
                                </div>

                                <div class="form-group">
                                <label> Required Year </label>
                                     <td><input type="text" name="requiredYear" required="required" placeholder="E.g. 2020"></td>
                                </div>
                                <br><br>
                                    <button type="submit" name="submit" class="btn btn-primary"> Update Application </button>
=======
                        @foreach($application as $app)
                        <div class="col">
                        <form action="/updateapplication{{$app->applicationID}}" method="PUT" enctype="multipart/form-data">
                                {{ csrf_field()}}
                            {{method_field('PUT')}}
                                    <table class="table table-borderless table-dark table-hover">
                                        <tr>
                                            <th>Applicant ID</th>
                                            <td><input type="text" name="userID" value="{{ $app->userID }}"></td>
                                        </tr>
                                        <tr>
                                            <th>Application ID</th>
                                            <td><input type="text" name="applicationID" value="{{ $app->applicationID }}"></td>
                                        </tr>
                                        <tr>
                                            <th>Residence ID</th>
                                            <td><input type="text" name="residenceID" value="{{ $app->residenceID }}"></td>
                                        </tr>
                                        <tr>
                                            <th>Required Month</th>
                                            <td><input type="text" name="requiredMonth" required="required" value="{{ $app->requiredMonth }}"></td>
                                        </tr>
                                        <tr>
                                            <th>Required Year</th>
                                            <td><input type="text" name="requiredYear" required="required" value="{{ $app->requiredYear }}"></td>
                                        </tr>
                                    </table>
                                    <button type="submit" name="submit" class="btn btn-primary">Update Application</button>
>>>>>>> 7285197afdd08f63df168af5eac1219377590153
                            </form>
                        </div>
                        @endforeach
                    </div>
@endsection


@section('scripts')

@endsection
