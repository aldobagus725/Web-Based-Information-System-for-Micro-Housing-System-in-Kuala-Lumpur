<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Application;

class ApplicantController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        return view('home');
    }
    public function ViewApplication(){
        $application = DB::table('application')->get();
        return view('Applicant.dashboard_user',['application' => $application]);
    }
    public function ViewResidence(){
        $residencess = DB::table('residences')->get();
        return view('Applicant.ViewResidence')->with('residencess',$residencess);
    }
    public function SubmitApplication($id){
        $residence = DB::table('residences')->where('residenceID',$id)->get();
        return view('Applicant.SubmitApplication',['residences' => $residence]);
    }
    public function store(Request $request){
        $application = new Application();
        $application->userID = $request->input('userID');
        $application->residenceID = $request->input('residenceID');
        $application->requiredMonth = $request->input('requiredMonth');
        $application->requiredYear = $request->input('requiredYear');
        $application->status = $request->input('status');
        $application->payment = $request->input('payment');
        $application->payment_status = $request->input('payment_status');

        $application->save();
        return redirect('/dashboard_user');
    }
    
       
}
