<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class HousingOfficerMiddleware{
    public function handle($request, Closure $next){
        if(Auth::user()->usertype == 'HousingOfficer'){
            return $next($request);
        }
        else{
            return redirect('/home')-> with('status','MAMANG Admin');
        }
        
    }
}
