@extends ('layouts.master')
@section('title')
    Allocation
@endsection
@section('content')
    <div class="container">
        <div class="jumbotron">
        <h1> Unit Allocation </h1><br>
        <form action="" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                <table class="table table-borderless table-hover">
                <tr>
                    <th>Application ID</th>
                    <th>Unit Number</th>
                    <th>From Date</th>
                    <th>End Date</th>
                    <th>Duration (Days)</th>
                    <th>Allocate</th>
                </tr>
                @foreach ($applicationss as $app)
                @foreach ($units as $u)
                <tr>
                    <td><input type="text" name="applicationID" class="form-control" value="{{ $app->applicationID }}" readonly></td>
                    <td><input type="text" name="unitNo" class="form-control" value="{{ $u->unitNo }}" readonly></td>
                    <td><input type="text" name="fromDate" class="date form-control" required placeholder="YYYY.MM.DD"></td>
                    <td><input type="text" name="endDate" class="date form-control"></td>
                    <td><input type="text" name="duration" class="form-control" value="365" readonly></td>
                    <td><button type="submit" name="submit" class="btn btn-primary">Allocate </button></td>
                </tr>
                @endforeach
                @endforeach  
                </table>

                <br><br>
                
                <script type="text/javascript">
                    $('.date').datepicker({  
                    format: 'mm-dd-yyyy'});  

                    function showDays() {
                        var start = $('#arr_date').datepicker('getDate');
                        var end   = $('#dep_date').datepicker('getDate');
                        if(!start || !end)
                            return;
                        var days = (end - start)/1000/60/60/24;
                        $('#num_nights').val(days);  
                    }
                    $( "#arr_date" ).datepicker({ dateFormat: 'dd-mm-yy', onSelect: showDays });
                    $( "#dep_date" ).datepicker({ dateFormat: 'dd-mm-yy', onSelect: showDays });
                </script>

            </form>
     
        </div>
</div>
@endsection


@section('scripts')

@endsection
