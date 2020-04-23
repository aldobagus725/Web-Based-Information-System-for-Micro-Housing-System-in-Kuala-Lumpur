<?php

namespace App\Http\Controllers\Housingofficer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Residences;

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
        $application = DB::table('application')->get();
        return view('Housingofficer.viewapplication',['application' => $application]);
    }
    public function editapplication($applicationID)
    {
        $application = DB::table('application')->where('applicationID',$applicationID)->get();
        return view('Housingofficer.editapplication')->with('application', $application);

    }
    public function updateapplication(Request $request,$applicationID)
    {
        DB::table('application')->where('applicationID',$request->$applicationID)->update([
        'requiredMonth'=> $request->requiredMonth,
        'requiredYear'=> $request->requiredYear,
        ]);
        return redirect('/viewapplication')->with('application',$application);
    }

}
