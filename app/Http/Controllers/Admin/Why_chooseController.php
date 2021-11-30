<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Why_choose;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;

class Why_chooseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // view page
    public function index()
    {
        return view('admin.why_choose', [
            'why_chooses' => Why_choose::paginate(10),
        ]);
    }

    // insert page
    public function why_choose_add()
    {
        return view('admin.why_choose_add');
    }

    // insert
    public function insert(Request $req)
    {

        $heading = $req->heading;
        $content = $req->content;
        $photo = $req->file('photo');
        $created_at = Carbon::now();

        $req->validate([
            'heading' => 'required',
            'content' => 'required',
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);

        $id = Why_choose::insertGetId([
            "heading" => $heading,
            "content" => $content,
            "created_at" => $created_at,
        ]);

        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "why_choose_" .$id ."." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/why_choose/' . $photo_name));

        Why_choose::find($id)->update([
            "photo" => $photo_name,
        ]);

        return back()->with('success', 'You are success to add why choose item');
    }


    // edit page
    public function edit_page($id)
    {
        return view('admin.why_choose_edit', [
            'why_choose' => Why_choose::find($id),
        ]);
    }

    // edit
    public function edit(Request $req)
    {
        $id = $req->id;
        $heading = $req->heading;
        $content = $req->content;
        $photo = $req->file('photo');

        $req->validate([
            'heading' => 'required',
            'content' => 'required',
        ]);
        if($photo){
            $req->validate([
                'photo' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);
        }

        Why_choose::find($id)->update([
            "heading" => $heading,
            "content" => $content,
        ]);

        // photo update
        if($photo){
            $old_photo_name = Why_choose::find($id)->photo;
            unlink('uploads/why_choose/' . $old_photo_name);

            $photo = $req->file('photo');
            $photo_extention = $photo->getClientOriginalExtension();
            $photo_name = $old_photo_name . "." . $photo_extention;
            Image::make($photo)->save(base_path('public/uploads/why_choose/' . $photo_name));

            Why_choose::find($id)->update([
                "photo" => $photo_name,
            ]);
        }

        return back()->with('success', 'You are success to update why choose item');
    }

    // p_delete single
    public function delete($id)
    {
        $photo = Why_choose::find($id)->photo;
        unlink('uploads/why_choose/' . $photo);
        Why_choose::find($id)->forceDelete();
        return back()->with('error', 'You are success delete your why choose');
    }
}
