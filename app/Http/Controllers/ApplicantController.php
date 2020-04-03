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
//    public function store(Request $request)
//    {
//        $residences = new Residences();
//        $residences->address = $request->input('address');
//        $residences->numunits = $request->input('numunits');
//        $residences->sizeperunits = $request->input('sizeperunits');
//        $residences->monthlyrental = $request->input('monthlyrental');
//
//        $residences->save();
//        return view('Housingofficer.addresidences')->with('Housingofficer.addresidences',$residences);
//    }
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
}
