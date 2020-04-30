<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Applicant;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ApplicantRegisterController extends Controller{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct(){
        $this->middleware('guest');
        $this->middleware('guest:applicant');
    }
    protected function validator(array $data){
        return Validator::make($data, [
            'fullname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:applicants'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:applicants'],
            'monthlyIncome' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    public function showApplicantRegisterForm(){
        return view('auth.applicantregister');
    }
    protected function create(Request $request){
        $this->validator($request->all())->validate();
        $applicant = Applicant::create([
            'fullname' => $request['fullname'],
            'username' => $request['username'],
            'email' => $request['email'],
            'monthlyIncome' => $request['monthlyIncome'],
            'password' => Hash::make($request['password']),
        ]);
        $applicant->save();
        return redirect()->intended('/login/applicant');
    }
}
