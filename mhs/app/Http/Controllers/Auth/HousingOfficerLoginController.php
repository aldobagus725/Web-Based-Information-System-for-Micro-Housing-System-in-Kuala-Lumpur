<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class HousingOfficerLoginController extends Controller{
    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct(){
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:applicant')->except('logout');
    }
    public function showLogin(){
        return view('auth.hologin');
    }
    public function login(Request $request){
        $this->validate($request, [
            'username'   => 'required|string',
            'password' => 'required|min:6'
        ]);
        if (Auth::guard('housingofficer')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))){
            return redirect()->intended('/dashboard');
        }
    }
}
