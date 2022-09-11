<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerCreateRequest;
use App\Http\Requests\PartnerEditRequest;
use App\Models\Partner;
use Carbon\Carbon;
use Image;


class PartnerController extends Controller
{

     public function index()
     {
         return view('admin.partners.index', [
             'partners' => Partner::paginate(10),
         ]);
     }

     // insert page
     public function partner_add()
     {
         return view('admin.partners.create');
     }

     // insert
     public function insert(PartnerCreateRequest $req)
     {
         $name = $req->name;
         $photo = $req->file('photo');
         $created_at = Carbon::now();

         $id = Partner::insertGetId([
             "name" => $name,
             "created_at" => $created_at,
         ]);


         $photo = $req->file('photo');
         $photo_extention = $photo->getClientOriginalExtension();
         $photo_name = "partner_" .$id ."." . $photo_extention;
         Image::make($photo)->save(base_path('public/uploads/partner/' . $photo_name));

         Partner::find($id)->update([
             "photo" => $photo_name,
         ]);

         return back()->with('success', 'You are success to add partner item');
     }



     // edit page
     public function edit_page($id)
     {
         return view('admin.partners.edit', [
             'partner' => Partner::find($id),
         ]);
     }

     // edit
     public function edit(PartnerEditRequest $req)
     {
         $id = $req->id;
         $name = $req->name;
         $photo = $req->file('photo');


         if($photo){
            $req->validate([
                'photo' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);
         }

         Partner::find($id)->update([
             "name" => $name,
         ]);

         // photo update
         if($photo){
             $old_photo_name = Partner::find($id)->photo;
             unlink('uploads/partner/' . $old_photo_name);

             $photo = $req->file('photo');
             $photo_extention = $photo->getClientOriginalExtension();
             $photo_name = 'partner_'. $id . "." . $photo_extention;
             Image::make($photo)->save(base_path('public/uploads/partner/' . $photo_name));

             Partner::find($id)->update([
                 "photo" => $photo_name,
             ]);
         }
         return back()->with('success', 'You are success to add partner item');
     }

     // p_delete single
     public function delete($id)
     {
         $photo = Partner::find($id)->photo;
         unlink('uploads/partner/' . $photo);
         Partner::find($id)->forceDelete();
         return back()->with('error', 'You are success delete your partner item');
     }
}
