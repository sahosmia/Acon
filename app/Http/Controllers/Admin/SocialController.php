<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    
     public function index()
     {
         return view('admin.social', [
             'socials' => Social::all(),
         ]);
     }

     // social_update
     public function social_update(Request $req)
     {
        foreach($req->social as $social_key => $social_value){
            if($social_value == ''){
                Social::where('social_name', $social_key)->update([
                    "social_url" => NULL,
                ]);
            }else{
                Social::where('social_name', $social_key)->update([
                    "social_url" => $social_value,
                ]);
            }
        }
        return back()->with('success', 'Data is Updated Successfull');
     }
}
