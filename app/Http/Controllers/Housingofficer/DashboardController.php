<?php

namespace App\Http\Controllers\Housingofficer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Residences;
use App\Application;
use App\Allocation;
use App\Paymeent;
use App\User;
use App\Unit;

use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function addresidences()
    {
        return view('Housingofficer.addresidences');
    }
    public function store(Request $request)
    {
        $residences = new Residences();
        $residences->address = $request->input('address');
        $residences->numunits = $request->input('numunits');
        $residences->sizeperunits = $request->input('sizeperunits');
        $residences->monthlyrental = $request->input('monthlyrental');

        $residences->save();
        for ($x = 1; $x <= $residences->numunits;$x++)
        {
            $units = new Unit();
            $units->availability = "Available";
            $units->residenceID = $residences->residenceID;
            $units->save();
        }
        return view('Housingofficer.addresidences')->with('Housingofficer.addresidences',$residences);
    }
    public function viewresidences()
    {
        $residencess = Residences::all();
        return view('Housingofficer.viewresidences')->with('residencess',$residencess);
    }
    public function editresidences($residenceID)
    {
        $residencess = Residences::find($residenceID);
        //dd($residencess);
        return view('Housingofficer.editresidences')->with('residencess',$residencess);
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
        return view('Housingofficer.viewapplication')->with('applicationss',$applicationss);
    }
    public function editapplication($applicationID)
    {
        //dd($applicationID);
        $applicationss = Application::where('applicationID',$applicationID)->get();
        //dd($applicationss);
        return view('Housingofficer.editapplication')->with('application', $applicationss);

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
    public function allocatehousing($applicationID)
    {
        $applicationss = Application::find($applicationID)->first();
        //dd($applicationss->residenceID);
        $units = Unit::where('residenceID', $applicationss->residenceID)->get();
        return view('Housingofficer.allocatehousing')->with('units',$units);
    }
    public function storeallocate(Request $request)
    {
        $allocation = new Allocation();
        $allocation->applicationID = $applicationss->$residenceID;
        $allocation->unitNo = $units->residenceID ;
        $allocation->fromDate =$request->input('fromDate');
        $allocation->endDate =$request->input('endDate');
        $allocation->duration =$request->input('duration');

        $allocation->save();

    }

}
