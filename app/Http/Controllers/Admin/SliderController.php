<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderCreateRequest;
use App\Http\Requests\SliderEditRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Image;

class SliderController extends Controller
{


     public function index()
     {
         return view('admin.sliders.index', [
             'sliders' => Slider::paginate(10),
         ]);
     }

     // insert page
     public function create()
     {
         return view('admin.sliders.create');
     }

     // insert
     public function insert(SliderCreateRequest $req)
     {
         $photo = $req->file('photo');
         $heading = $req->heading;
         $content = $req->content;
         $button1_text = $req->button1_text;
         $button1_url = $req->button1_url;
         $button2_text = $req->button2_text;
         $button2_url = $req->button2_url;
         $created_at = Carbon::now();



         $id = Slider::insertGetId([
             "heading" => $heading,
             "content" => $content,
             "button1_text" => $button1_text,
             "button1_url" => $button1_url,
             "button2_text" => $button2_text,
             "button2_url" => $button2_url,
             "created_at" => $created_at,
         ]);

         $photo = $req->file('photo');
         $photo_extention = $photo->getClientOriginalExtension();
         $photo_name = "slider_" .$id ."." . $photo_extention;
         Image::make($photo)->save(base_path('public/uploads/slider/' . $photo_name));

         Slider::find($id)->update([
             "photo" => $photo_name,
         ]);

         return back()->with('success', 'Slider is uploaded successfully!');
     }



     // edit page
     public function edit_page($id)
     {
         return view('admin.sliders.edit', [
             'slider' => Slider::find($id),
         ]);
     }

     // edit
     public function edit(SliderEditRequest $req)
     {
         $id = $req->id;
         $photo = $req->file('photo');
         $heading = $req->heading;
         $content = $req->content;
         $button1_text = $req->button1_text;
         $button1_url = $req->button1_url;
         $button2_text = $req->button2_text;
         $button2_url = $req->button2_url;

         if($photo){
             $req->validate([
                 'photo' => 'required|file|image|mimes:jpeg,jpg,png',
             ]);
         }

         Slider::find($id)->update([
            "heading" => $heading,
            "content" => $content,
            "button1_text" => $button1_text,
            "button1_url" => $button1_url,
            "button2_text" => $button2_text,
            "button2_url" => $button2_url,
         ]);

         // photo update
         if($photo){
             $old_photo_name = Slider::find($id)->photo;
             unlink('uploads/slider/' . $old_photo_name);

             $photo = $req->file('photo');
             $photo_extention = $photo->getClientOriginalExtension();
             $photo_name = 'slider'. $id . "." . $photo_extention;
             Image::make($photo)->save(base_path('public/uploads/slider/' . $photo_name));

             Slider::find($id)->update([
                 "photo" => $photo_name,
             ]);
         }
         return back()->with('success', 'Slider is updated successfully!');
     }

     // p_delete single
     public function delete($id)
     {
         $photo = Slider::find($id)->photo;
         unlink('uploads/slider/' . $photo);
         Slider::find($id)->forceDelete();
         return back()->with('success', 'You are success delete your slider');
     }
}
