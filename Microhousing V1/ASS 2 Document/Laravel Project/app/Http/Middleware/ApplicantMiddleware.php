<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ApplicantMiddleware
{
    public function handle($request, Closure $next)
    {
       if(Auth::user()->usertype == 'Applicant')
        {
            return $next($request);
        }
        else
        {
            return redirect('/home')-> with('status','Mamang!');
        }
    }
}
