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
                            <th>Application ID</th>
                            <th>Residence ID</th>
                            <th>Application Date</th>
                            <th>Required Month</th>
                            <th>Required Year </th>
                            <th>Status</th>
                            <th>ALLOCATE</th>
                            <th>EDIT</th>
                            <th>REJECT</th>
                        </thead>
                        <tbody>
                            @foreach ($applicationss as $app)
                                @foreach ($residencess as $r)
                                    @if($app->residenceID==$r->residenceID)
                                        @if($r->admin_id==Auth::user()->id)
                            <tr>
                                <td>{{ $app->userID}}</td>
                                <td>{{ $app->applicationID}}</td>
                                <td>{{ $app->residenceID}}</td>
                                <td>{{ $app->applicationDate}}</td>
                                <td>{{ $app->requiredMonth}}</td>
                                <td>{{ $app->requiredYear}}</td>
                                <td>{{ $app->status}}</td>
                                <td><a href="/allocatehousing{{$app->applicationID}}" class="btn btn-success">ALLOCATE</a></td>
                                <td><a href="/editapplication{{$app->applicationID}}" class="btn btn-warning">EDIT</a></td>   
                                <td><a href="/deleteapplication{{$app->applicationID}}" class="btn btn-danger">REJECT</a></td>

                            </tr>
                                        @endif
                                    @endif
                                @endforeach
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