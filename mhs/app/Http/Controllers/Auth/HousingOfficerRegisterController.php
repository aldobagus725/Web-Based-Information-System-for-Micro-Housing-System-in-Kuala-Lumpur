<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\HousingOfficer;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HousingOfficerRegisterController extends Controller{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct(){
        $this->middleware('guest');
        $this->middleware('guest:housingofficer');
    }
    protected function validator(array $data){
        return Validator::make($data, [
            'fullname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:housingofficers'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:housingofficers'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    public function showHousingOfficerRegisterForm(){
        return view('auth.horegister');
    }
    protected function create(Request $request){
        $this->validator($request->all())->validate();
        $housingofficer = HousingOfficer::create([
            'fullname' => $request['fullname'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $housingofficer->save();
        return redirect()->intended('/login/housingofficer');
    }
}
