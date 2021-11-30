<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   // view page
   public function index()
   {
       return view('admin.photo', [
           'photos' => Photo::paginate(10),
       ]);
   }

   // insert page
   public function photo_add()
   {
       return view('admin.photo_add');
   }

   // insert
   public function insert(Request $req)
   {
       $caption = $req->caption;
       $status = $req->status;
       $photo = $req->file('photo');
       $created_at = Carbon::now();

       $req->validate([
           'caption' => 'required',
           'status' => 'required',
           'photo' => 'required|file|image|mimes:jpeg,jpg,png',
       ]);

       $id = Photo::insertGetId([
           "caption" => $caption,
           "status" => $status,
           "created_at" => $created_at,
       ]);

       $photo = $req->file('photo');
       $photo_extention = $photo->getClientOriginalExtension();
       $photo_name = "photo_" .$id ."." . $photo_extention;
       Image::make($photo)->save(base_path('public/uploads/gallery/' . $photo_name));

       Photo::find($id)->update([
           "photo" => $photo_name,
       ]);
       return back()->with('success', 'You are success to add photo item');
   }



   // edit page
   public function edit_page($id)
   {
       return view('admin.photo_edit', [
           'photo' => Photo::find($id),
       ]);
   }

   // edit
   public function edit(Request $req)
   {
       $id = $req->id;
       $caption = $req->caption;
       $status = $req->status;
       $photo = $req->file('photo');

       $req->validate([
           'caption' => 'required',
           'status' => 'required',
       ]);
       if($photo){
           $req->validate([
               'photo' => 'required|file|image|mimes:jpeg,jpg,png',
           ]);
       }

       Photo::find($id)->update([
           "caption" => $caption,
           "status" => $status,
       ]);

       // photo update
       if($photo){
           $old_photo_name = Photo::find($id)->photo;
           unlink('uploads/gallery/' . $old_photo_name);

           $photo = $req->file('photo');
           $photo_extention = $photo->getClientOriginalExtension();
           $photo_name = 'photo_'. $id . "." . $photo_extention;
           Image::make($photo)->save(base_path('public/uploads/gallery/' . $photo_name));

           Photo::find($id)->update([
               "photo" => $photo_name,
           ]);
       }


       return back()->with('success', 'You are success to add photo item');
   }

   // p_delete single
   public function delete($id)
   {
       $photo = Photo::find($id)->photo;
       unlink('uploads/gallery/' . $photo);
       Photo::find($id)->forceDelete();
       return back()->with('error', 'You are success delete your photo');
   }
}
