<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newsEnglish;
use App\newsHindi;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function newsShow()
    {
        // Show News For English Language
        if (session('locale') == 'en') {
            $data = newsEnglish::all();
            return view('admin.news.index')->with('data', $data);
        }

        // Show News For Hindi Language
        if (session('locale') == 'hi') {
            $data = newsHindi::all();
            return view('admin.news.index')->with('data', $data);
        }
    }

    public function newsAdd(Request $req)
    {
        // Create News For English Language
        if (session('locale') == 'en') {
            $req->validate([
                'n_title' => 'required|max:255',
                'n_date' => 'required|date',
                'n_disc' => 'required',
                'n_file' => 'image|required|mimes:jpeg,bmp,png,jpg',
                'n_file_m.*' => 'image|mimes:jpeg,bmp,png,jpg',
            ]);

            $mfiles = $req->file('n_file_m');
            $file = $req->file('n_file');

            if ($req->hasFile('n_file')) {
                $file = $req->file('n_file');
                $new_file = time() . $file->getClientOriginalName();
                $file->storeAs('public/eng_news', $new_file);
            }

            $newsEnglish = new newsEnglish;
            $newsEnglish->news_title = $req->n_title;
            $newsEnglish->news_slug = SlugService::createSlug(newsEnglish::class, 'news_slug', $req->n_title);
            $newsEnglish->news_date = $req->n_date;
            $newsEnglish->news_discription = $req->n_disc;
            $newsEnglish->news_image = $new_file;
            $multi_files = '';

            if ($req->hasFile('n_file_m')) {
                foreach ($mfiles as $mfile) {
                    $new_m_file = time() . $mfile->getClientOriginalName();
                    $mfile->storeAs('public/m_eng_news/', $new_m_file);
                    $multi_files .= $new_m_file . ",";
                }
            }
            $newsEnglish->m_news_image = $multi_files;
            $newsEnglish->save();

            return redirect()->back()->with('success', 'News has been saved successfully.');
        }

        // Create News For Hindi Language
        if (session('locale') == 'hi') {
            $req->validate([
                'n_title' => 'required|max:255',
                'n_date' => 'required|date',
                'n_disc' => 'required',
                'n_file' => 'image|required|mimes:jpeg,bmp,png,jpg',
                'n_file_m.*' => 'image|mimes:jpeg,bmp,png,jpg',
            ]);

            $mfiles = $req->file('n_file_m');
            $file = $req->file('n_file');

            if ($req->hasFile('n_file')) {
                $file = $req->file('n_file');
                $new_file = time() . $file->getClientOriginalName();
                $file->storeAs('public/hin_news', $new_file);
            }

            $newsHindi = new newsHindi;
            $newsHindi->news_title = $req->n_title;
            $newsHindi->news_slug = SlugService::createSlug(newsHindi::class, 'news_slug', $req->n_title);
            $newsHindi->news_date = $req->n_date;
            $newsHindi->news_discription = $req->n_disc;
            $newsHindi->news_image = $new_file;
            $multi_files = '';

            if ($req->hasFile('n_file_m')) {
                foreach ($mfiles as $mfile) {
                    $new_m_file = time() . $mfile->getClientOriginalName();
                    $mfile->storeAs('public/m_hin_news/', $new_m_file);
                    $multi_files .= $new_m_file . ",";
                }
            }
            $newsHindi->m_news_image = $multi_files;
            $newsHindi->save();

            return redirect()->back()->with('success', 'समाचार सफलतापूर्वक स्टोर किया गया।');
        }
    }

    public function newsEdit($id)
    {
        // Edit News For English Language
        if (session('locale') == 'en') {
            $data = newsEnglish::find($id);

            if ($data) {
                return view('admin.news.edit')->with('data', $data);
            } else {
                return redirect()->route('knp.dashboard')->with('error', 'News Not Found !!');
            }
        }

        // Edit News For Hindi Language
        if (session('locale') == 'hi') {
            $data = newsHindi::find($id);

            if ($data) {
                return view('admin.news.edit')->with('data', $data);
            } else {
                return redirect()->route('knp.dashboard')->with('error', 'समाचार नहीं मिला !!');
            }
        }
    }

    public function newsUpdate(Request $req, $id)
    {
        // Update News For English Language
        if (session('locale') == 'en') {
            $req->validate([
                'n_title' => 'required|max:255',
                'n_date' => 'required|date',
                'n_disc' => 'required',
                'n_file' => 'image|mimes:jpeg,bmp,png,jpg',
            ]);


            $up_data = newsEnglish::find($id);
            $up_data->news_title = $req->n_title;
            $up_data->news_date = $req->n_date;
            $up_data->news_discription = $req->n_disc;
            $up_data->news_slug = SlugService::createSlug(newsEnglish::class, 'news_slug', $req->n_title);

            $old_file = $req->h_file;

            if ($req->file('n_file') == "") {
                $up_data->news_image = $req->h_file;
            } else {

                $name = $req->file('n_file')->getClientOriginalName();
                $myfile = $up_data->news_image =  time() . $name;
                $req->file('n_file')->storeAs('public/eng_news', $myfile);
                $path = public_path() . "/storage/eng_news/" . $old_file;
                unlink($path);
            }
            $up_data->update();
            return redirect()->route('knp.newsshow')->with('success', 'News has been updated successfully.');
        }

        // Update News For Hindi Language
        if (session('locale') == 'hi') {
            $req->validate([
                'n_title' => 'required|max:255',
                'n_date' => 'required|date',
                'n_disc' => 'required',
                'n_file' => 'image|mimes:jpeg,bmp,png,jpg',
            ]);

            $up_data = newsHindi::find($id);
            $up_data->news_title = $req->n_title;
            $up_data->news_date = $req->n_date;
            $up_data->news_discription = $req->n_disc;
            $up_data->news_slug = SlugService::createSlug(newsHindi::class, 'news_slug', $req->n_title);

            $old_file = $req->h_file;
            if ($req->file('n_file') == "") {
                $up_data->news_image = $req->h_file;
            } else {
                $name = $req->file('n_file')->getClientOriginalName();
                $myfile = $up_data->news_image =  time() . $name;
                $req->file('n_file')->storeAs('public/hin_news', $myfile);
                $path = public_path() . "/storage/hin_news/" . $old_file;
                unlink($path);
            }
            $up_data->update();
            return redirect()->route('knp.newsshow')->with('success', 'समाचार सफलतापूर्वक अपडेट कर दिया गया है।');
        }
    }

    public function newsDelete($id)
    {
        // Delete News For English Language
        if (session('locale') == 'en') {
            $data = newsEnglish::where('id', $id)->first();

            if (!$data) {
                return redirect()->back()->with('error', 'News not found !!');
            } else {
                newsEnglish::where('id', $id)->delete();
                $eng_image = "/public/eng_news/" . $data->news_image;
                if (Storage::exists($eng_image)) {
                    Storage::delete($eng_image);
                }

                $images = explode(",", $data->m_news_image);

                foreach ($images as $image) {
                    $eng_images = "/public/m_eng_news/" . $image;
                    if (Storage::exists($eng_images)) {
                        Storage::delete($eng_images);
                    }
                }
                return redirect()->back()->with('error', 'News has been deleted successfully.');
            }
        }

        // Delete News For Hindi Language
        if (session('locale') == 'hi') {
            $data = newsHindi::where('id', $id)->first();

            if (!$data) {
                return redirect()->back()->with('error', 'समाचार नहीं मिला !!');
            } else {
                newsHindi::where('id', $id)->delete();
                $hin_image = "/public/hin_news/" . $data->news_image;
                if (Storage::exists($hin_image)) {
                    Storage::delete($hin_image);
                }

                $images = explode(",", $data->m_news_image);

                foreach ($images as $image) {
                    $hin_images = "/public/m_hin_news/" . $image;
                    if (Storage::exists($hin_images)) {
                        Storage::delete($hin_images);
                    }
                }
                return redirect()->back()->with('error', 'समाचार सफलतापूर्वक हटा दिया गया है.');
            }
        }
    }
}
