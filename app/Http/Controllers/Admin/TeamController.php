<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamCreateRequest;
use App\Http\Requests\TeamEditRequest;
use App\Models\Designation;
use App\Models\Team;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;



class TeamController extends Controller
{

    public function index()
    {
        return view('admin.teams.index', [
            'teams' => Team::paginate(10),
        ]);
    }

    public function team_add()
    {
        return view('admin.teams.create', [
            'designations' => Designation::all(),
        ]);
    }

    public function insert(TeamCreateRequest $req)
    {
        $name = $req->name;
        $photo = $req->file('photo');
        $designation_id = $req->designation_id;
        $created_at = Carbon::now();

        $all_socail_nullable_fild = ['facebook', 'twitter', 'linkedin', 'youtube', 'google_plus', 'instagram', 'flickr'];

        foreach($all_socail_nullable_fild as $item) {

            if ($req->$item) {
                $req->validate([
                    $item => 'url',
                ]);
            }
        }

        $id = Team::insertGetId([
            "name" => $name,
            "designation_id" => $designation_id,
            "created_at" => $created_at,
        ]);

        foreach($all_socail_nullable_fild as $item) {

            if ($req->$item) {
                //
                Team::find($id)->update([
                    $item => $req->$item,
                ]);
            }
        }

        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "team_member_" .$id ."." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/team/' . $photo_name));

        Team::find($id)->update([
            "photo" => $photo_name,
        ]);

        return back()->with('success', 'You are success to add team member');
    }



    public function edit_page($id)
    {
        return view('admin.teams.edit', [
            'team' => Team::find($id),
            'designations' => Designation::all(),

        ]);
    }

    public function edit(TeamEditRequest $req)
    {
        $id = $req->id;
        $name = $req->name;
        $photo = $req->file('photo');
        $designation_id = $req->designation_id;


        if($photo){
            $req->validate([
                'photo' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);
        }

        $all_socail_nullable_fild = ['facebook', 'twitter', 'linkedin', 'youtube', 'google_plus', 'instagram', 'flickr'];
        foreach($all_socail_nullable_fild as $item) {

            if ($req->$item) {
                $req->validate([
                    $item => 'url',
                ]);
            }
        }

        Team::find($id)->update([
            "name" => $name,
            "designation_id" => $designation_id,
        ]);

        // photo update
        if($photo){
            $old_photo_name = Team::find($id)->photo;
            unlink('uploads/team/' . $old_photo_name);

            $photo = $req->file('photo');
            $photo_extention = $photo->getClientOriginalExtension();
            $photo_name = 'team_member_'. $id . "." . $photo_extention;
            Image::make($photo)->save(base_path('public/uploads/team/' . $photo_name));

            Team::find($id)->update([
                "photo" => $photo_name,
            ]);
        }
        foreach($all_socail_nullable_fild as $item) {

            if ($req->$item == "") {
                Team::find($id)->update([
                    $item => null,
                ]);
            }else{
                Team::find($id)->update([
                    $item => $req->$item,
                ]);
            }
        }

        return back()->with('success', 'You are success to update team member');
    }

    public function delete($id)
    {
        $photo = Team::find($id)->photo;
        unlink('uploads/team/' . $photo);
        Team::find($id)->forceDelete();
        return back()->with('error', 'You are success delete your team member');
    }
}
