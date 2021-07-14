<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newsEnglish;
use App\newsHindi;

class NewscornerController extends Controller
{
    public function index()
    {
        $dataen = newsEnglish::orderBy('id', 'desc')->paginate(4);
        $datahi = newsHindi::orderBy('id', 'desc')->paginate(4);
        return view('news.latestnews', ['newsen' => $dataen], ['newshi' => $datahi]);
    }

    public function news_details($slug)
    {
        $detailen = newsEnglish::where('news_slug', $slug)->first();
        $detailhi = newsHindi::where('news_slug', $slug)->first();

        if ($detailen) {
            return view('news.news_details', ['detailen' => $detailen]);
        } else if ($detailhi) {
            return view('news.news_details', ['detailhi' => $detailhi]);
        } else {
            return view('errors.404');
        }
    }
}
