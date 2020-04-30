<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\HousingOfficer;
use App\Applicant;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:HousingOfficer');
        $this->middleware('guest:applicant');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'monthlyincome' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    public function showHousingOfficerRegisterForm()
    {
        return view('auth.horegister');
    }

    public function showApplicantRegisterForm()
    {
        return view('auth.applicantregister');
    }
    protected function createHousingOfficer(Request $request){
        $this->validator($request->all())->validate();
        $HousingOfficer = HousingOfficer::create([
            'fullname' => $request['fullname'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('/login');
    }
    protected function createApplicant(Request $request){
        $this->validator($request->all())->validate();
        $applicant = Applicant::create([
            'fullname' => $request['fullname'],
            'username' => $request['username'],
            'email' => $request['email'],
            'monthlyIncome' => $request['monthlyIncome'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('/login');
    }
}
