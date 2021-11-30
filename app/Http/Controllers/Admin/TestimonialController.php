<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // view page
    public function index()
    {
        return view('admin.testimonial', [
            'testimonials' => Testimonial::paginate(10),
        ]);
    }

    // insert page
    public function testimonial_add()
    {
        return view('admin.testimonial_add');
    }

    // insert
    public function insert(Request $req)
    {
        $name = $req->name;
        $designation = $req->designation;
        $company = $req->company;
        $comment = $req->comment;
        $photo = $req->file('photo');
        $created_at = Carbon::now();


        $req->validate([
            'name' => 'required',
            'designation' => 'required',
            'company' => 'required',
            'comment' => 'required',
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);

        $id = Testimonial::insertGetId([
            "name" => $name,
            "designation" => $designation,
            "company" => $company,
            "comment" => $comment,
            "created_at" => $created_at,
        ]);

        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "testimonial_" .$id ."." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/testimonial/' . $photo_name));

        Testimonial::find($id)->update([
            "photo" => $photo_name,
        ]);

        return back()->with('success', 'You are success to add testimonial item');
    }



    // edit page
    public function edit_page($id)
    {
        return view('admin.testimonial_edit', [
            'testimonial' => Testimonial::find($id),
        ]);
    }

    // edit
    public function edit(Request $req)
    {
        $id = $req->id;
        $name = $req->name;
        $designation = $req->designation;
        $company = $req->company;
        $comment = $req->comment;
        $photo = $req->file('photo');

        $req->validate([
            'name' => 'required',
            'designation' => 'required',
            'company' => 'required',
            'comment' => 'required',
        ]);
        if($photo){
            $req->validate([
                'photo' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);
        }

        Testimonial::find($id)->update([
            "name" => $name,
            "designation" => $designation,
            "company" => $company,
            "comment" => $comment,
        ]);

        // photo update
        if($photo){
            $old_photo_name = Testimonial::find($id)->photo;
            unlink('uploads/testimonial/' . $old_photo_name);

            $photo = $req->file('photo');
            $photo_extention = $photo->getClientOriginalExtension();
            $photo_name = 'testimonial_'. $id . "." . $photo_extention;
            Image::make($photo)->save(base_path('public/uploads/testimonial/' . $photo_name));

            Testimonial::find($id)->update([
                "photo" => $photo_name,
            ]);
        }

        return back()->with('success', 'You are success to update testimonial item');
    }

    // p_delete single
    public function delete($id)
    {
        $photo = Testimonial::find($id)->photo;
        unlink('uploads/testimonial/' . $photo);
        Testimonial::find($id)->forceDelete();
        return back()->with('error', 'You are success delete your testimonial');
    }
}
