@extends ('layouts.master')

@section('title')
    Set Up New Residence
@endsection


@section('content')

    <div class="container">
        <div class="jumbotron">
        <h1> Set Up New Residence</h1><br>
            <form action="{{ route ('addedData')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="form-group">
                    <label> Staff ID (in charge) for the residence </label>
                    <input type="text" name="admin_id" class="form-control" value="{{ Auth::user()->id }}" readonly>
                </div>
                <div class="form-group">
                    <label> Address </label>
                    <input type="text" name="address" class="form-control" placeholder="Enter the Address">
                </div>
                <div class="form-group">
                    <label> Num of Units </label>
                    <input type="text" name="numunits" class="form-control" placeholder="Enter the Number">
                </div>
                <div class="form-group">
                    <label> Size of Units (Meter Square) </label>
                    <input type="text" name="sizeperunits" class="form-control" placeholder="Enter the Size">
                </div>
                <div class="form-group">
                    <label> Monthly Rental (Malaysian Ringgit) </label>
                    <input type="text" name="monthlyrental" class="form-control" placeholder="Enter the Price">
                </div>
                <br><br>
                <button type="submit" name="submit" class="btn btn-primary"> Save Data </button>

@endsection


@section('scripts')

@endsection
