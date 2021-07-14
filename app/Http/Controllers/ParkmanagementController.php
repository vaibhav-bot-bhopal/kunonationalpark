<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkmanagementController extends Controller
{
    //
    public function administrativebody()
    {
        return view('kuno-management.administrative-body');
    }
    public function goalsandobjectives()
    {
        return view('kuno-management.goals-and-objectives');
    }
    public function otheractivities()
    {
        return view('kuno-management.other-activities');
    }
    public function rti()
    {
        return view('kuno-management.rti');
    }
    public function contactus()
    {
        return view('kuno-management.contact-us');
    }


}
