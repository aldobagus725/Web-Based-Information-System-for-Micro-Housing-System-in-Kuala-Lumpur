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
                                            <th>Size per Unit </th>
                                            <th>Monthly Rental</th>
                                            <th>EDIT</th>
                                            <th>DELETE</th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Denpasar</td>
                                                <td>10</td>
                                                <td>20</td>
                                                <td>RM100</td>
                                                <td>
                                                    <a href="#" class="btn btn-sucess">EDIT</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-danger">DELETE</a>
                                                </td>

                                            </tr>
                                            
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