<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialCreateRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;

class TestimonialController extends Controller
{

    public function index()
    {
        return view('admin.testimonials.index', [
            'testimonials' => Testimonial::paginate(10),
        ]);
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(TestimonialCreateRequest $req)
    {
        $name = $req->name;
        $designation = $req->designation;
        $company = $req->company;
        $comment = $req->comment;
        $photo = $req->file('photo');
        $created_at = Carbon::now();




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



    public function edit($id)
    {
        return view('admin.testimonials.edit', [
            'testimonial' => Testimonial::find($id),
        ]);
    }

    public function update(Request $req, $id)
    {
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

    public function destroy($id)
    {
        $photo = Testimonial::find($id)->photo;
        unlink('uploads/testimonial/' . $photo);
        Testimonial::find($id)->forceDelete();
        return back()->with('error', 'You are success delete your testimonial');
    }
}
