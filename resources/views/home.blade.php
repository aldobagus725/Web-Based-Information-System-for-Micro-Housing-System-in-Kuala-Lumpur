@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Landing Page</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
			         <a href="dashboard_user">Click this link to go to <strong>Applicant</strong> dashboard!</a><br>
		             <a href="dashboard">Click this link to go to <strong>Housing Officer</strong> dashboard!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
