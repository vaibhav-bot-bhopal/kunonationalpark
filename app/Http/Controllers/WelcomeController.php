<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Kuno_park;
use App\Info_hindi;
use App\newsEnglish;
use App\newsHindi;

class WelcomeController extends Controller
{
    public function index()
    {
        $data = Kuno_park::All();
        $data2 = Info_hindi::All();

     
        $dataen = newsEnglish::orderBy('id', 'desc')->take(3)->get(); 
        $datahi = newsHindi::orderBy('id', 'desc')->take(3)->get();      

        return view('welcome', ['data' => $data], ['data2' => $data2])->with( 'dataen', $dataen )->with( 'datahi', $datahi );
    }
    
}
