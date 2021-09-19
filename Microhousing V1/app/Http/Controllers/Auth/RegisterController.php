<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller{

    use RegistersUsers;
    protected $redirectTo = RouteServiceProvider::HOME;
//    protected $redirectTo = 'homepage';
    public function __construct(){
        $this->middleware('guest');
    }
    protected function validator(array $data){
        return Validator::make($data, [
            'fullname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'monthlyIncome' => ['required', 'string', 'max:255'],
            'usertype' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data){
        return User::create([
            'fullname' => $data['fullname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'monthlyIncome' => $data['monthlyIncome'],
            'usertype' => $data['usertype'],
            'password' => Hash::make($data['password']), 
        ]);
    }
}
