<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutkunoController extends Controller
{
    //

    public function introduction()
    {
        return view('about.introduction');
    }
    public function history()
    {
        return view('about.history');
    }
    public function significance()
    {
        return view('about.significance');
    }
    public function forestandvegetation()
    {
        return view('about.forest-and-vegetation');
    }
    public function biodiversity()
    {
        return view('about.biodiversity');
    }







}
