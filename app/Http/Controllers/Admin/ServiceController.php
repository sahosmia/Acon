<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceCreateRequest;
use App\Http\Requests\ServiceEditRequest;
use App\Models\Service;

use Illuminate\Support\Str;

use Carbon\Carbon;
use Image;

class ServiceController extends Controller
{

    public function index()
    {
        return view('admin.services.index', [
            'services' => Service::paginate(10),
        ]);
    }

    // insert page
    public function service_add()
    {
        return view('admin.services.create');
    }

    // insert
    public function insert(ServiceCreateRequest $req)
    {
        $heading = $req->heading;
        $slug = strtolower(str_replace(" ","-",$req->heading));
        $short_content = $req->short_content;
        $content = $req->content;
        $meta_title = $req->meta_title;
        $meta_description = $req->meta_description;
        $created_at = Carbon::now();

        $count = Service::where('slug', $slug)->count();

        if ($count != 0) {
           $slug = $slug.'-1';
        }

        $id = Service::insertGetId([
            "heading" => $heading,
            "slug" => $slug,
            "short_content" => $short_content,
            "content" => $content,
            "meta_title" => $meta_title,
            "meta_description" => $meta_description,
            "created_at" => $created_at,
        ]);

        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "service_" .$id ."." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/service/' . $photo_name));

        // banner
        $service_photo = $req->file('banner');
        $service_photo_extention = $service_photo->getClientOriginalExtension();
        $service_photo_name = "service_banner_" .$id ."." . $service_photo_extention;
        Image::make($service_photo)->save(base_path('public/uploads/banner/' . $service_photo_name));

        Service::find($id)->update([
            "photo" => $photo_name,
            "banner" => $service_photo_name,
        ]);

        return back()->with('success', 'Service is uploaded successfully!');
    }

    // edit page
    public function edit_page($id)
    {
        return view('admin.services.edit', [
            'service' => Service::find($id),
        ]);
    }

    // edit
    public function edit(ServiceEditRequest $req)
    {
        $id = $req->id;
        $heading = $req->heading;
        $short_content = $req->short_content;
        $content = $req->content;
        $meta_title = $req->meta_title;
        $meta_description = $req->meta_description;
        $photo = $req->file('photo');
        $service_photo = $req->file('banner');


        if($photo){
            $req->validate([
                'photo' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);
        }

        if($service_photo){
            $req->validate([
                'banner' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);
        }



        Service::find($id)->update([
            "heading" => $heading,
            "short_content" => $short_content,
            "content" => $content,
            "meta_title" => $meta_title,
            "meta_description" => $meta_description,
        ]);

        // photo update
        if($photo){
            $old_photo_name = Service::find($id)->photo;
            unlink('uploads/service/' . $old_photo_name);

            $photo = $req->file('photo');
            $photo_extention = $photo->getClientOriginalExtension();
            $photo_name = "service_" .$id . "." . $photo_extention;

            Image::make($photo)->save(base_path('public/uploads/service/' . $photo_name));

            Service::find($id)->update([
                "photo" => $photo_name,
            ]);
        }
        // banner
        if($service_photo){
            $old_service_photo_name = Service::find($id)->banner;
            unlink('uploads/service_banner/' . $old_service_photo_name);

            $service_photo = $req->file('banner');
            $service_photo_extention = $service_photo->getClientOriginalExtension();
            $service_photo_name = "service_banner_" .$id . "." . $service_photo_extention;

            Image::make($service_photo)->save(base_path('public/uploads/banner/' . $service_photo_name));

            Service::find($id)->update([
                "banner" => $service_photo_name,
            ]);
        }
        return back()->with('success', 'Service Item is Updated successfully');
    }

    // p_delete single
    public function delete($id)
    {
        $photo = Service::find($id)->photo;
        unlink('uploads/service/' . $photo);
        $banner = Service::find($id)->banner;
        unlink('uploads/banner/' . $banner);
        Service::find($id)->forceDelete();
        return back()->with('success', 'Data is deleted successfully');
    }
}
