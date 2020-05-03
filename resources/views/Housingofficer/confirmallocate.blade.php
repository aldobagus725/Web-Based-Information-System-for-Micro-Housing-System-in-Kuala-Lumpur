<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Confirm</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dbkl.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
            <h1>Confirmation </h1><br>
                @foreach ($applicationss as $app)
                    @foreach ($units as $u)
                <form action="/allocate" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <table class="table table-borderless table-hover">
                    <tr>
                        <th>Application ID</th>
                        <td><input type="text" name="applicationID" class="form-control" value="{{ $app->applicationID }}" readonly></td>
                    </tr>
                    <tr>
                        <th>Unit Number</th>
                        <td><input type="text" name="unitNo" class="form-control" value="{{ $u->unitNo }}" readonly></td>
                    </tr>
                    <tr>
                        <th>From Date</th>
                        <td><input type="date" name="fromDate" class="date form-control"></td>
                    </tr>
                    <tr>
                        <th>Duration (Days)</th>
                        <td><input type="text" name="duration" class="form-control" value="365" readonly></td>
                    </tr>
                    </table>
                    <table table table-borderless table-hover>
                        <tr>
                            <td>Are you sure you want to allocate?</td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" class="btn btn-primary" value="Yes"></td>
                            <td><a class="btn btn-primary btn-danger" href="/viewapplications">No</a></td>
                        </tr>
                    </table>
                    <br><br>
                </form>
                    @endforeach
                @endforeach  
            </div>
        </div>
        <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/bootstrap.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/magnific-popup.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/jquery.interactive_bg.js') }}" type="text/javascript"></script>
    </body>
</html>
    