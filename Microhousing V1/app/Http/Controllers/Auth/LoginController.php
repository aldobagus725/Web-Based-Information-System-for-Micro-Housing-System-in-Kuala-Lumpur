<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller{
    use AuthenticatesUsers;
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo(){
        if(Auth::user()->usertype=='Housingofficer'){
            return 'dashboard';
        }
        else{
            return 'dashboard_user';
        }
    }
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request){
        $this->validate($request, [
            'username' => 'required|string', 
            'password' => 'required|string|min:6',
        ]);
        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $login = [
            $loginType => $request->username,
            'password' => $request->password
        ];
        if (auth()->attempt($login)) {
            if(Auth::user()->usertype=='Housingofficer'){
                return redirect()->intended('/dashboard');
            }
            else{
                return redirect()->intended('/dashboard_user');
            }
        }
        return redirect()->route('login')->with(['error' => 'Email/Password salah!']);
    }
}
