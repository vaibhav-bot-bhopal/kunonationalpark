<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newsEnglish;
use App\newsHindi;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
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

    public function english()
    {
        $data = newsEnglish::all();
        return view('admin.english.index')->with('data', $data);
    }

    public function eng_news_create(Request $req)
    {
        $req->validate([
            'n_title' => 'required|max:255',
            'n_date' => 'required|date',
            'n_disc' => 'required',
            'n_file' => 'required',
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

        return redirect()->back()->with('success', 'Article has been saved successfully.');
    }

    public function eng_news_edit($id)
    {
        $data = newsEnglish::find($id);

        if ($data) {
            return view('admin.english.edit')->with('data', $data);
        } else {
            return redirect()->route('admin-en')->with('error', 'Article Not Found !!');
        }
    }

    public function eng_news_update(Request $req, $id)
    {
        $req->validate([
            'n_title' => 'required|max:255',
            'n_date' => 'required|date',
            'n_disc' => 'required',
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
        return redirect()->route('admin-en')->with('success', 'Article has been updated successfully.');
    }

    public function eng_news_del($id)
    {
        $data = newsEnglish::where('id', $id)->first();
        //$data = newsHindi::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'Articles not found.');
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
            return redirect()->back()->with('error', 'Articles has been deleted successfully.');
        }
    }
    // ------------------------------------ hindi start here ------------------------------
    public function hindi()
    {
        $data = newsHindi::all();
        return view('admin.hindi.index')->with('data', $data);
    }

    public function hin_news_create(Request $req)
    {
        $req->validate([
            'n_title' => 'required|max:255',
            'n_date' => 'required|date',
            'n_disc' => 'required',
            'n_file' => 'required',
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

        return redirect()->back()->with('success', 'Article has been saved successfully.');
    }


    public function hin_news_edit($id)
    {
        $data = newsHindi::find($id);

        if ($data) {
            return view('admin.hindi.edit')->with('data', $data);
        } else {
            return redirect()->route('admin-hi')->with('error', 'Article Not Found !!');
        }
    }

    public function hin_news_update(Request $req, $id)
    {
        $req->validate([
            'n_title' => 'required|max:255',
            'n_date' => 'required|date',
            'n_disc' => 'required',
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
        return redirect()->route('admin-hi')->with('success', 'Article has been updated successfully.');
    }


    public function hin_news_del($id)
    {
        $data = newsHindi::where('id', $id)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Articles not found.');
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
            return redirect()->back()->with('error', 'Articles has been deleted successfully.');
        }
    }
}
