<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

use Carbon\Carbon;


class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     // view page
     public function index()
     {
         return view('admin.faq', [
             'faqs' => Faq::paginate(2),
         ]);
     }

     // insert page
     public function faq_add()
     {
         return view('admin.faq_add');
     }

     // insert
     public function insert(Request $req)
     {
         $title = $req->title;
         $content = $req->content;
         $show = $req->show;
         $created_at = Carbon::now();


         $req->validate([
             'title' => 'required',
             'content' => 'required',
             'show' => 'required',
         ]);

         faq::insert([
             "title" => $title,
             "content" => $content,
             "show" => $show,
             "created_at" => $created_at,
         ]);
         return back()->with('success', 'Data is Added Successfull');
     }

     // edit page
     public function edit_page($id)
     {
         return view('admin.faq_edit', [
             'faq' => faq::find($id),
         ]);
     }

     // edit
     public function edit(Request $req)
     {
         $id = $req->id;
         $title = $req->title;
         $content = $req->content;
         $show = $req->show;

         $req->validate([
             'title' => 'required',
             'content' => 'required',
             'show' => 'required',
         ]);

         faq::find($id)->update([
             "title" => $title,
             "content" => $content,
             "show" => $show,
         ]);
         return back()->with('success', 'Data is Updated Successfull');
     }

     // p_delete single
     public function delete($id)
     {
         faq::find($id)->forceDelete();
         return back()->with('error', 'You are success delete your faq');
     }
}
