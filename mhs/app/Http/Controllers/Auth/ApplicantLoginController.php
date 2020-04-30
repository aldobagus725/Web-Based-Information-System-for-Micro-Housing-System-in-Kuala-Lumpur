<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class ApplicantLoginController extends Controller{
    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct(){
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:housingofficer')->except('logout');
    }
    public function showLogin(){
        return view('auth.applicantlogin');
    }
    public function login(Request $request){
        $this->validate($request, [
            'username'   => 'required|string',
            'password' => 'required|min:6'
        ]);
        if (Auth::guard('applicant')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))){
            return redirect()->intended('/dashboard_user');
        }
    }
}
