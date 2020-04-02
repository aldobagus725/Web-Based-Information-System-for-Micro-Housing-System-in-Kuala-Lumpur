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
                                            <th>Application Date</th>
                                            <th>Required Month</th>
                                            <th>Required Year </th>
                                            <th>Status</th>
                                            <th>DELETE</th>
                                            <th>ALLOCATE</th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>12/12/2020</td>
                                                <td>December</td>
                                                <td>2020</td>
                                                <td>-</td>

                                                <td>
                                                    <a href="#" class="btn btn-sucess">DELETE</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-sucess">ALLOCATE</a>
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