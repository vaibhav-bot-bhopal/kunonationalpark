<?php

namespace App\Http\Controllers;

use App\newsEnglish;
use App\newsHindi;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Display Info For English Language
        if (session('locale') == 'en') {
            $user = Auth::user();
            $news_count = newsEnglish::all()->count();
            return view('admin.dashboard.dashboard', compact('news_count'));
        }

        // Display Info For Hindi Language
        if (session('locale') == 'hi') {
            $user = Auth::user();
            $news_count = newsHindi::all()->count();
            return view('admin.dashboard.dashboard', compact('news_count'));
        }
    }
}
