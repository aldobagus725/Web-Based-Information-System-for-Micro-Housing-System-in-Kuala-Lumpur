@extends ('layouts.master')
@section('title')
    Edit Application
@endsection
@section('content')

<div class="container">
        <div class="jumbotron">
                    Edit Application 
                </div>
            </div>
            <div id="residence" class="row p-5">
                <div class="container">
                    <div class="row">
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
                            </form>
                        </div>
                        @endforeach
                    </div>
@endsection


@section('scripts')

@endsection
