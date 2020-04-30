@extends ('layouts.master')

@section('title')
    Allocate Housing
@endsection


@section('content')

    <div class="container">
        <div class="jumbotron">
        <h1> Allocate Housing </h1><br>
        @foreach ($units as $ap)
        <form action="{{$ap->applicationID}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="form-group">
                    <label> Application ID </label>
                    <input type="text" name="applicationID" class="form-control" value="{{ $ap->applicationID }}">
                </div>

                <div class="form-group">
                    <label> Unit NO </label>
                    <input type="text" name="unitNo" class="form-control" value="{{ $ap->residenceID }}">
                </div>

                <div class="form-group">
                    <label> From Date </label>
                    <input class="date form-control" type="text">
                </div>

                <div class="form-group">
                    <label> End Date </label>
                    <input class="date form-control" type="text">
                </div>

                <div class="form-group">
                    <label> Duration </label>
                    <input type="text" id="num_nights" readonly>
                </div>

                <br><br>
                <button type="submit" name="submit" class="btn btn-primary"> Allocate Housing </button>
                <script type="text/javascript">
                $('.date').datepicker({  
                format: 'mm-dd-yyyy'});  

                function showDays() 
                {
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
         @endforeach       
</body>
</html>
@endsection


@section('scripts')

@endsection
