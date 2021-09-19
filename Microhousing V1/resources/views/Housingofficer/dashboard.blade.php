@extends ('layouts.master')

@section('title')
    MicroHousing System
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <style>
            html body {color: black;font-family: 'Nunito', sans-serif;font-weight: bold;height: 100vh;margin: 0;}
            .full-height {height: 100vh;}
            .flex-center {align-items: center;display: flex;justify-content: center;}
            .position-ref {position: center;}
            .top-right {position: absolute;right: 10px;top: 18px;}
            .content {text-align: center;}
            .title {font-size: 50px;}
            .m-b-md {margin-bottom: 30px;}
        </style>
        <div class="col-md-12">
            <div class="content">
                <div class="title m-b-md">
                    Welcome {{ Auth::user()->fullname }}!
                </div>
                <div class="jumbotron">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection