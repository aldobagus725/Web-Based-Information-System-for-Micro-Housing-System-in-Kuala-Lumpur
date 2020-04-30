<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HousingOfficerController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        return view('HousingOfficer.dashboards');
    }
    public function registerhousing()
    {
        return view('HousingOfficer.registerhousing');
    }
    public function addresidences()
    {
        return view('HousingOfficer.addresidences');
    }
    public function store(Request $request)
    {
        $residences = new Residences();
        $residences->address = $request->input('address');
        $residences->numunits = $request->input('numunits');
        $residences->sizeperunits = $request->input('sizeperunits');
        $residences->monthlyrental = $request->input('monthlyrental');

        $residences->save();
        return view('HousingOfficer.addresidences')->with('HousingOfficer.addresidences',$residences);
    }
    public function viewresidences()
    {
        $residencess = Residences::all();
        return view('HousingOfficer.viewresidences')->with('residencess',$residencess);
    }
    public function editresidences($residenceID)
    {
        $residencess = Residences::find($residenceID);
        //dd($residencess);
        return view('HousingOfficer.editresidences')->with('residencess',$residencess);
    }
    public function updateresidences(Request $request,$residenceID)
    {
        $residencess = Residences::find($residenceID);
        $residencess->address = $request->input('address');
        $residencess->numunits = $request->input('numunits');
        $residencess->sizeperunits = $request->input('sizeperunits');
        $residencess->monthlyrental = $request->input('monthlyrental');

        $residencess->save();
        return redirect('/viewresidences')->with('residences',$residencess);
        
    }
    public function viewapplication()
    {
        $applicationss = Application::all();
        return view('HousingOfficer.viewapplication')->with('applicationss',$applicationss);
    }
    public function editapplication($applicationID)
    {
        //dd($applicationID);
        $applicationss = Application::where('applicationID',$applicationID)->get();
        //dd($applicationss);
        return view('HousingOfficer.editapplication')->with('application', $applicationss);

    }
    public function updateapplication(Request $request,$applicationID)
    {
        $applicationss = Application::find($applicationID);
        //$applicationss->applicationID = $request->input('applicationID');
        $applicationss->residenceID = $request->input('residenceID');
        $applicationss->requiredMonth = $request->input('requiredMonth');
        $applicationss->requiredYear = $request->input('requiredYear');

        $applicationss->save();
        return redirect('/viewapplications')->with('application',$applicationss); 
    }
    public function deleteapplication($applicationID)
    {
        $applicationss = Application::find($applicationID);
        $applicationss->delete();
        return redirect ('/viewapplications')->with('application',$applicationss);
    }
}
