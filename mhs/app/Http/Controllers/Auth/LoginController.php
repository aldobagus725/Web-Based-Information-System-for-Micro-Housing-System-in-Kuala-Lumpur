<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller{
    use AuthenticatesUsers;
    // protected function redirectTo(){
    //     if(Auth::user()->usertype=='Housing Officer'){
    //         return 'dashboard';
    //     }
    //     elseif(Auth::user()->usertype=='Applicant'){
    //         return 'dashboard_user';
    //     }
    //     else{
    //         return 'homepage';
    //     }
    // }
    // public function __construct(){
    //     $this->middleware('guest')->except('logout');
    // }
    // public function login(Request $request){
    //     $this->validate($request, [
    //         'username' => 'required|string', 
    //         'password' => 'required|string|min:6',
    //     ]);
    //     $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    //     $login = [
    //         $loginType => $request->username,
    //         'password' => $request->password
    //     ];
    //     if (auth()->attempt($login)) {
    //         if(Auth::user()->usertype=='Housing Officer'){
    //             return redirect()->intended('/dashboard');
    //         }
    //         elseif (Auth::user()->usertype=='Applicant'){
    //             return redirect()->intended('/dashboard_user');
    //         }
    //         else{
    //             return redirect()->intended('homepage');
    //         }
    //     }
    //     return redirect()->route('login')->with(['error' => 'Email/Password salah!']);
    // }
    public function getLogin(){
        return view('auth.login');
    }

  public function postLogin(Request $request){
      // Validate the form data
    $this->validate($request, [
      'username' => 'required|username',
      'password' => 'required'
    ]);
    if (Auth::guard('housingofficer')->attempt(['username' => $request->username, 'password' => $request->password])) {
      return redirect()->intended('/dashboard');
    } 
    else if (Auth::guard('applicant')->attempt(['username' => $request->username, 'password' => $request->password])) {
        return redirect()->intended('/dashboard_user');
    }
  }

  public function logout()
  {
    if (Auth::guard('housingofficer')->check()) {
      Auth::guard('housingofficer')->logout();
    } elseif (Auth::guard('applicant')->check()) {
      Auth::guard('applicant')->logout();
    }

    return redirect('homepage');

  }
}
