@extends ('layouts.master')

@section('title')
    View Residences
@endsection
@section('content')
<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">View Residences</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Residence ID</th>
                                            <th>Address</th>
                                            <th>Number of Units</th>
                                            <th>Size per Unit (Meter Square) </th>
                                            <th>Monthly Rental (Ringgit)</th>
                                            <th>EDIT</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($residencess as $residence)
                                            <tr>
                                                <td>{{$residence->residenceID}}</td>
                                                <td>{{$residence->address}}</td>
                                                <td>{{$residence->numunits}}</td>
                                                <td>{{$residence->sizeperunits}}</td>
                                                <td>{{$residence->monthlyrental}}</td>
                                                <td>
                                                    <a href="/editresidences{{$residence->residenceID}}" class="btn btn-sucess">EDIT</a>
                                                </td>
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