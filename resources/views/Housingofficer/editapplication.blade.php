@extends ('layouts.master')

@section('title')
    Edit Application
@endsection


@section('content')
<div class="container-fluid contents">
            <div id="home" class="row clearfix" data-ibg-bg="{{ asset('assets/img/15.jpg') }}">
                <div class="title-home">
                    Edit Application
                </div>
            </div>
            <div id="residence" class="row p-5">
                <div class="container">
                    <div class="row">
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
                            </form>
                        </div>
                        @endforeach
                    </div>
@endsection


@section('scripts')

@endsection
