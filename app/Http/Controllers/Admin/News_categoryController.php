<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News_category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;



class News_categoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // view page
    public function index()
    {
        return view('admin.news_category', [
            'news_categorys' => News_category::paginate(10),
        ]);
    }

    // insert page
    public function news_category_add()
    {
        return view('admin.news_category_add');
    }

    // insert
    public function insert(Request $req)
    {
        $name = $req->name;
        $slug = $req->slug;
        $meta_title = $req->meta_title;
        $meta_description = $req->meta_description;
        $created_at = Carbon::now();

        $req->validate([
            'name' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
        ]);

        if ($slug == '') {
            $slug = Str::slug($name);
        } else {
            $slug = Str::slug($slug);
        }

        $count = News_category::where('slug', $slug)->count();

        if ($count != 0) {
           $slug = $slug.'-1';
        }

        News_category::insert([
            "name" => $name,
            "slug" => $slug,
            "meta_title" => $meta_title,
            "meta_description" => $meta_description,
            "created_at" => $created_at,
        ]);
        return back()->with('success', 'Data is Added Successfull');
    }

    // edit page
    public function edit_page($id)
    {
        return view('admin.news_category_edit',[
           'news_categorys' => News_category::find($id),
        ]);
    }

    // edit
    public function edit(Request $req)
    {
        $id = $req->id;
        $slug = $req->slug;
        $name = $req->name;
        $meta_title = $req->meta_title;
        $meta_description = $req->meta_description;

        $req->validate([
            'name' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
        ]);

        if ($slug == '') {
            $slug = Str::slug($name);
        } else {
            $slug = Str::slug($slug);
        }


        $count = News_category::where('slug', $slug)->count();

        if ($count > 1) {
            $slug = $slug.'-1';
        }


        News_category::find($id)->update([
            "name" => $name,
            "slug" => $slug,
            "meta_title" => $meta_title,
            "meta_description" => $meta_description,
        ]);
        return back()->with('success', 'Data is Updated Successfull');
    }

    // p_delete single
    public function delete($id)
    {
        News_category::find($id)->forceDelete();
        return back()->with('error', 'Data is Deleted Successfull');
    }
}
