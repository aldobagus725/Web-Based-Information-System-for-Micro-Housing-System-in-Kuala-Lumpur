@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Housing Officer Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  Sign up as <strong>Housing Officer</strong> is success!
		          <a href="dashboard">Click this link to go to your dashboard!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
