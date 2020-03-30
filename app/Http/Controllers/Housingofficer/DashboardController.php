<?php

namespace App\Http\Controllers\Housingofficer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function viewresidences()
    {
        return view('Housingofficer.viewresidences');
    }
}
