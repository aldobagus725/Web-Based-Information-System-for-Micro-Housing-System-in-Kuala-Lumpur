<?php

namespace App\Http\Controllers\Housingofficer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Residences;
use App\Application;
use App\Allocation;
use App\User;
use App\Unit;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller{
    public function addresidences(){
        return view('Housingofficer.addresidences');
    }
    public function store(Request $request){
        $residences = new Residences();
        $residences->admin_id = $request->input('admin_id');
        $residences->address = $request->input('address');
        $residences->numunits = $request->input('numunits');
        $residences->sizeperunits = $request->input('sizeperunits');
        $residences->monthlyrental = $request->input('monthlyrental');

        $residences->save();
        for ($x = 1; $x <= $residences->numunits;$x++){
            $units = new Unit();
            $units->availability = "Available";
            $units->residenceID = $residences->residenceID;
            $units->save();
        }
        return view('Housingofficer.addresidences')->with('Housingofficer.addresidences',$residences);
    }
    public function viewresidences(){
        $residencess = Residences::all();
        return view('Housingofficer.viewresidences')->with('residencess',$residencess);
    }
    public function editresidences($residenceID){
        $residencess = Residences::find($residenceID);
        return view('Housingofficer.editresidences')->with('residencess',$residencess);
    }
    public function updateresidences(Request $request,$residenceID){
        $residencess = Residences::find($residenceID);
        $residencess->address = $request->input('address');
        $residencess->numunits = $request->input('numunits');
        $residencess->sizeperunits = $request->input('sizeperunits');
        $residencess->monthlyrental = $request->input('monthlyrental');
        $residencess->save();
        return redirect('/viewresidences')->with('residences',$residencess);
    }
    public function viewapplication(){
        $applicationss = Application::all();
        $residencess = Residences::all();
        return view('Housingofficer.viewapplication')->with('applicationss',$applicationss)->with('residencess',$residencess);
    }
    public function editapplication($applicationID){
        $applicationss = Application::where('applicationID',$applicationID)->get();
        return view('Housingofficer.editapplication')->with('application', $applicationss);
    }
    public function updateapplication(Request $request,$applicationID){
        $applicationss = Application::find($applicationID);
        $applicationss->residenceID = $request->input('residenceID');
        $applicationss->requiredMonth = $request->input('requiredMonth');
        $applicationss->requiredYear = $request->input('requiredYear');
        $applicationss->save();
        return redirect('/viewapplications')->with('application',$applicationss); 
    }
    public function deleteapplication($applicationID){
        $applicationss = Application::find($applicationID);
        $applicationss->delete();
        return redirect ('/viewapplications')->with('application',$applicationss);
    }
    public function viewallocation(){
        $allocation = Allocation::all();
        return view('Housingofficer.viewallocation')->with('allocation',$allocation);
    }
    public function allocatehousing($id){
        $applicationss = Application::where('applicationID',$id)->get();
        $units = Unit::where('residenceID', $applicationss[0]->residenceID)->get();
        return view('Housingofficer.allocatehousing')->with('units',$units)->with('applicationss',$applicationss);
    }
    public function confirmallocate($applicationID,$unitNo){
        $applicationss = Application::where('applicationID',$applicationID)->get();
        $units = Unit::where('unitNo', $unitNo)->get();
        return view('Housingofficer.confirmallocate')->with('units',$units)->with('applicationss',$applicationss);
    }
    public function storeallocate(Request $request){
        $allocation = new Allocation();
        $allocation->applicationID = $request->input('applicationID');
        $allocation->unitNo = $request->input('unitNo');
        $allocation->fromDate = new Carbon($request->input('fromDate'));
        $toAdd = new Carbon($request->input('fromDate'));
        $allocation->duration=$request->input('duration');
        $duration = $allocation->duration=$request->input('duration');
        $allocation->endDate = $toAdd->addDays($duration);
        $allocation->save();
        //application changing status
        $applicationID = $allocation->applicationID = $request->input('applicationID');
        $application = Application::find($applicationID);
        $application ->status =  $allocation->status = $request->input('status');
        $application ->payment_status = $allocation->payment_status = $request->input('payment_status');
        $application->save();
        return view('Housingofficer.dashboard');
    }
    public function deleteallocate($applicationID){
        $allocation = Allocation::where('unitNo',$applicationID)->delete();
        return redirect ('/viewallocation')->with('allocation',$allocation);
    }
    public function viewapplicant(){
        $filter = 'Applicant';
        $applicants = User::where('usertype',$filter)->get();
        return view('Housingofficer.viewapplicant')->with('applicants',$applicants);
    }
    public function viewhousingofficer(){
        $filter = 'Housingofficer';
        $housingofficers = User::where('usertype',$filter)->get();
        return view('Housingofficer.viewhousingofficer')->with('housingofficers',$housingofficers);
    }
    public function editapplicant($id){
        $applicants = User::where('id',$id)->get();
        return view('Housingofficer.editapplicant')->with('applicants', $applicants);
    }
    public function edithousingofficer($id){
        $housingofficers = User::where('id',$id)->get();
        return view('Housingofficer.edithousingofficer')->with('housingofficers', $housingofficers);
    }
    public function deleteapplicant($id){
        $applicants = User::find($id);
        $applicants->delete();
        return redirect ('/viewapplicant')->with('applicants',$applicants);
    }
    public function deletehousingofficer($id){
        $housingofficers = User::find($id);
        $housingofficers->delete();
        return redirect ('/viewhousingofficer')->with('housingofficers',$housingofficers);
    }
    public function updateapplicant(Request $request,$id){
        $applicants = User::find($id);
        $applicants->fullname = $request->input('fullname');
        $applicants->username = $request->input('username');
        $applicants->monthlyIncome = $request->input('monthlyIncome');
        $applicants->email = $request->input('email');
        $applicants->save();
        return redirect('/viewapplicant')->with('applicants',$applicants); 
    }
    public function updatehousingofficer(Request $request,$id){
        $housingofficers = User::find($id);
        $housingofficers->fullname = $request->input('fullname');
        $housingofficers->username = $request->input('username');
        $housingofficers->email = $request->input('email');
        $housingofficers->save();
        return redirect('/viewhousingofficer')->with('housingofficers',$housingofficers); 
    }
}
