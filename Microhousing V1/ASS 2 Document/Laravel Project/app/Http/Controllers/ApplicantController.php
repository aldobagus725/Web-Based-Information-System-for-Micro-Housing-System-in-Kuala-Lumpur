<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home');
    }
    public function ViewApplication()
    {
        $application = DB::table('application')->get();
        return view('Applicant.dashboard_user',['application' => $application]);
    }
    public function ViewResidence()
    {
        $residencess = DB::table('residences')->get();
        return view('Applicant.ViewResidence')->with('residencess',$residencess);
    }
    public function SubmitApplication($id)
    {
        $residence = DB::table('residences')->where('residenceID',$id)->get();
        return view('Applicant.SubmitApplication',['residences' => $residence]);
    }
    public function store(Request $request)
    {
        DB::table('application')->insert([
            'requiredMonth' => $request->requiredMonth,
            'requiredYear' => $request->requiredYear,
            'status' => $request->status,
            'residenceID' => $request->residenceID,
            'userID' => $request->userID,
            'payment' => $request->payment,
            'payment_status' => $request->payment_status,
        ]);
        return redirect('/dashboard_user');
    }
}
