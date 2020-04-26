@extends ('layouts.master')

@section('title')
    Edit Residence
@endsection


@section('content')

    <div class="container">
        <div class="jumbotron">
        <h1> Edit Residence</h1><br>
            <form action="/updateresidences{{$residencess->residenceID}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}

                <input type="hidden" name="residenceID" residenceID="residenceID" value="{{$residencess->residenceID}}">

                <div class="form-group">
                    <label> Address </label>
                    <input type="text" name="address" class="form-control" value="{{$residencess->address}}" placeholder="Enter the Address">
                </div>

                <div class="form-group">
                    <label> Num of Units </label>
                    <input type="text" name="numunits" class="form-control" value="{{$residencess->numunits}}"placeholder="Enter the Number">
                </div>

                <div class="form-group">
                    <label> Size of Units </label>
                    <input type="text" name="sizeperunits" class="form-control" value="{{$residencess->sizeperunits}}"placeholder="Enter the Size">
                </div>

                <div class="form-group">
                    <label> Monthly Rental </label>
                    <input type="text" name="monthlyrental" class="form-control" value="{{$residencess->monthlyrental}}"placeholder="Enter the Price">
                </div>
                <br><br>
                <button type="submit" name="submit" class="btn btn-primary"> Update Data </button>

</body>
</html>
@endsection


@section('scripts')

@endsection
