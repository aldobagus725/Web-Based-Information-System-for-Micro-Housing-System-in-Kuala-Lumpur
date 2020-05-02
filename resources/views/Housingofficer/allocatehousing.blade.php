@extends ('layouts.master')
@section('title')
    Allocation
@endsection
@section('content')
    <div class="container">
        <div class="jumbotron">
        <h1> Unit Allocation </h1><br>
            @foreach ($applicationss as $app)
        <form action="/allocatehousing{$app->applicationID}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                <table class="table table-borderless table-hover">
                <tr>
                    <th>Application ID</th>
                    <th>Unit Number</th>
                    <th>From Date</th>
                    <th>Duration (Days)</th>
                    <th>Allocate</th>
                </tr>
                    @foreach ($units as $u)
                <tr>
                    <td><input type="text" name="applicationID" class="form-control" value="{{ $app->applicationID }}" readonly></td>
                    <td><input type="text" name="unitNo" class="form-control" value="{{ $u->unitNo }}" readonly></td>
                    <td><input type="date" name="fromDate" class="date form-control"></td>
                    <td><input type="text" name="duration" class="form-control" value="365" readonly></td>
                    <td><button type="submit" name="submit" class="btn btn-primary">Allocate </button></td>
                </tr>
                    @endforeach
                @endforeach  
                </table>

                <br><br>
            </form>
     
        </div>
</div>
@endsection


@section('scripts')

@endsection
