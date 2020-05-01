<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class HousingofficerMiddleware{
    public function handle($request, Closure $next){
        if(Auth::user()->usertype == 'Housingofficer'){
            return $next($request);
        }
        else{
            return redirect('/home')-> with('status','MAMANK ADMIN!');
        }
    }
}
