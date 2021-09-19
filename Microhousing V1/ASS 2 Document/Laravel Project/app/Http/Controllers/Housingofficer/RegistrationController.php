<?php

namespace App\Http\Controllers\Housingofficer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registerhousing()
    {
        return view('Housingofficer.registerhousing');
    }
}
