@extends ('layouts.master')

@section('title')
    View Allocations
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title"> View Allocations</h4>
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>APPLICATION ID</th>
                            <th>UNIT NO</th>
                            <th>FROM DATE</th>
                            <th>DURATION</th>
                            <th>END DATE</th>
                            <th>DELETE</th>
                        </thead>
                        <tbody>
                            @foreach ($allocation as $al)
                            <tr>
                                <td>{{ $al->applicationID}}</td>
                                <td>{{ $al->unitNo}}</td>
                                <td>{{ $al->fromDate}}</td>
                                <td>{{ $al->duration}}</td>
                                <td>{{ $al->endDate}}</td>
                                <td><a href="/deleteallocation{{$al->unitNo}}" class="btn btn-danger">DELETE</a></td>
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