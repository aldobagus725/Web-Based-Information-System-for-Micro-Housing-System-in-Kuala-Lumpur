@extends ('layouts.master')
@section('title')
    Allocation
@endsection
@section('content')
    <div class="container">
        <div class="jumbotron">
        <h1> Unit Allocation </h1><br>
            <table class="table table-borderless table-hover">
            <tr>
                <th>Application ID</th>
                <th>Unit Number</th>
                <th>Allocate</th>
            </tr>
            @foreach ($applicationss as $app)
                @foreach ($units as $u)
            <tr>
                <td><input type="text" name="applicationID" class="form-control" value="{{ $app->applicationID }}" readonly></td>
                <td><input type="text" name="unitNo" class="form-control" value="{{ $u->unitNo }}" readonly></td>
                <td><a class="btn btn-primary btn-sm" href="/confirmallocate/{{ $app->applicationID }}/{{ $u->unitNo }}">Allocate</a></td>
            </tr>
                @endforeach
            @endforeach  
            </table>
            <br><br>
        </div>
</div>
@endsection
@section('scripts')
@endsection