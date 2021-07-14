<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TouristinformationController extends Controller
{
    //

    public function howtoreach()
    {
        return view('tourist.how-to-reach');
    }
    public function location()
    {
        return view('tourist.location');
    }
    public function weather()
    {
        return view('tourist.weather');
    }
    public function safarizone()
    {
        return view('tourist.safari-zone');
    }
    public function excursionsandcharges()
    {
        return view('tourist.excursions-and-charges');
    }
    public function pointsofinterests()
    {
        return view('tourist.points-of-interests');
    }
    public function stay()
    {
        return view('tourist.stay');
    }
    public function doanddonts()
    {
        return view('tourist.do-and-dont');
    }
    public function safaribooking()
    {
        return view('tourist.safari-booking');
    }




}
