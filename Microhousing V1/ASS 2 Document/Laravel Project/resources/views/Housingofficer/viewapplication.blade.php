@extends ('layouts.master')

@section('title')
    View Applications
@endsection


@section('content')
<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">View Applications</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Applicant ID</th>
                                            <th>Applcation ID</th>
                                            <th>Residence ID</th>
                                            <th>Application Date</th>
                                            <th>Required Month</th>
                                            <th>Required Year </th>
                                            <th>Status</th>
                                            <th>DELETE</th>
                                            <th>ALLOCATE</th>

                                        </thead>
                                        <tbody>
                                            @foreach($application as $app)
                                            <tr>
                                                <td>{{ $app->applicationID}}</td>
                                                <td>{{ $app->userID}}</td>
                                                <td>{{ $app->residenceID}}</td>
                                                <td>{{ $app->applicationDate}}</td>
                                                <td>{{ $app->requiredMonth}}</td>
                                                <td>{{ $app->requiredYear}}</td>
                                                <td>{{ $app->status}}</td>
                                                <td><a href="#" class="btn btn-danger">DELETE</a></td>         
                                                <td><a href="#" class="btn btn-success">ALLOCATE</a></td>
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