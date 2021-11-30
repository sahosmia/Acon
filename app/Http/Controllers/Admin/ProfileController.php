<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Auth;
use Hash;



class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.profile');
    }

    // update_inforamtion
    public function update_information(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        User::find(Auth::id())->update([
            "name" => $req->name,
            "email" => $req->email,
            "phone" => $req->phone,
        ]);
        return back()->with('success', 'Data is updated successfully');
    }
    // update_photo
    public function update_photo(Request $req)
    {
        $req->validate([
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);

        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "user_". Auth::id() ."." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/user/' . $photo_name));
        if (Auth::user()->photo =! 'user.png') {
            $old_photo_name = Auth::user()->photo;
            unlink('uploads/user/' . $old_photo_name);
        }

        User::find(Auth::id())->update([
            "photo" => $photo_name,
        ]);
        return back()->with('success', 'Data is updated successfully');
    }
    // update_password
    public function update_password(Request $req)
    {
        $id = Auth::id();
        $old_password = $req->old_password;
        $password = $req->password;
        $req->validate([
            'password' => 'required|confirmed',
        ]);
        if (Hash::check($old_password, Auth::user()->password)) {
            User::find($id)->update([
                'password' => bcrypt($password),
            ]);
            return back()->with('success', 'Data is updated successfully');

        } else {
            return back()->with('error', 'Your password does not match with old password');
        }
    }

    
}
