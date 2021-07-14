<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index()
    {
  				
       
        $dir = public_path()."/assets/images/kuno_gallery";   
        // Sort in ascending order - this is default
        // $a = scandir($dir);        
        // Sort in descending order
        $images = scandir($dir);      
        $images = array_slice($images, 2 , 18);  
   
        return view('gallery', compact('images'));
    }
    public function page2()
    {
  				
       
        $dir = public_path()."/assets/images/kuno_gallery";
        $images = scandir($dir);      
        $images = array_slice($images, 20 , 18);  
   
        return view('gallery', compact('images'));
    }
    public function page3()
    {
  				
       
        $dir = public_path()."/assets/images/kuno_gallery";    
        $images = scandir($dir);      
        $images = array_slice($images, 38 , 12);  
   
        return view('gallery', compact('images'));
    }

}
