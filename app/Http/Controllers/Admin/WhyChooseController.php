<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WhyChooseCreateRequest;
use App\Http\Requests\WhyChooseEditRequest;
use App\Models\Why_choose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Image;

class WhyChooseController extends Controller
{

    public function index()
    {
        return view('admin.why-chooses.index', [
            'why_chooses' => Why_choose::paginate(10),
        ]);
    }

    public function create()
    {
        return view('admin.why-chooses.create');
    }

    public function store(WhyChooseCreateRequest $request)
    {
        $inputs = $request->only('heading','content');

        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $filename = "why_choose_" .time().'.'.$image->getClientOriginalExtension();
            $location = public_path('uploads/why_choose/'.$filename);
            Image::make($image)->save($location);
            $inputs['photo'] =  $filename;
        }

        try{
            Why_choose::create($inputs);
            Session::flash('success', 'You are success to add your item');
            return back();
        }catch (\Exception $exception){
            Session::flash('error',$exception->getMessage());
            return back();
        }
    }


    public function edit($id)
    {
        return view('admin.why-chooses.edit', [
            'why_choose' => Why_choose::find($id),
        ]);
    }

    public function update(WhyChooseEditRequest $req, $id)
    {

        $heading = $req->heading;
        $content = $req->content;
        $photo = $req->file('photo');

        $req->validate([

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

    public function destroy($id)
    {
        $photo = Why_choose::find($id)->photo;
        unlink('uploads/why_choose/' . $photo);
        Why_choose::find($id)->forceDelete();
        return back()->with('error', 'You are success delete your why choose');
    }
}
