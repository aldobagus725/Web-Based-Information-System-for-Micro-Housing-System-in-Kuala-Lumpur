@extends ('layouts.master')

@section('title')
    Edit Application
@endsection


@section('content')
<div class="container-fluid contents">
            <div id="home" class="row clearfix" data-ibg-bg="{{ asset('assets/img/15.jpg') }}">
                <div class="title-home">
                    Submit Application
                </div>
            </div>
            <div id="residence" class="row p-5">
                <div class="container">
                    <div class="row">
                        @foreach($residences as $r)
                        <div class="col">
                        <form action="/updateapplication{{$application ?? ''->applicationID}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field()}}
                                    <table class="table table-borderless table-dark table-hover">
                                        <tr>
                                            <th>Applicant ID</th>
                                            <td><input type="text" name="userID" value="{{ Auth::user()->id }}"></td>
                                        </tr>
                                        <tr>
                                            <th>Residence ID</th>
                                            <td><input type="text" name="residenceID" value="{{ $r->residenceID }}"></td>
                                        </tr>
                                        <tr>
                                            <th>Required Month</th>
                                            <td><input type="text" name="requiredMonth" required="required" placeholder="E.g. May, June..."></td>
                                        </tr>
                                        <tr>
                                            <th>Required Year</th>
                                            <td><input type="text" name="requiredYear" required="required" placeholder="E.g. 2020"></td>
                                        </tr>
                                    </table>
                                    <input type="hidden" name="status" value="Processing">
                                    <input type="hidden" name="payment" value="Unavailable">
                                    <input type="hidden" name="payment_status" value="Unavailable">
                                    <button type="submit" name="submit" class="btn btn-primary"> Update Application </button>
                            </form>
                        </div>
                        @endforeach
                    </div>
@endsection


@section('scripts')

@endsection
