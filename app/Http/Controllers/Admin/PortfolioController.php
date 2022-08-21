<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Portfolio_category;
use App\Models\Portfolio_photo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;

class PortfolioController extends Controller
{

   public function index()
   {
       return view('admin.portfolio', [
           'portfolios' => Portfolio::with("protfolioCategory:id,name")->paginate(10),
       ]);
   }

   // insert page
   public function portfolio_add()
   {
       return view('admin.portfolio_add',[
           'categorys' => Portfolio_category::all()
       ]);
   }

   // insert
   public function insert(Request $req)
   {
        $name = $req->name;
        $slug = $slug = strtolower(str_replace(" ","-",$req->name));
        $short_content = $req->short_content;
        $content = $req->content;
        $client_name = $req->client_name;
        $client_company = $req->client_company;
        $start_date = $req->start_date;
        $end_date = $req->end_date;
        $website = $req->website;
        $cost = $req->cost;
        $client_comment = $req->client_comment;
        $category_id = $req->category_id;
        $meta_title = $req->meta_title;
        $meta_description = $req->meta_description;
        $photo = $req->file('photo');
        $photos =$req->file('photos');
        $created_at = Carbon::now();


        $req->validate([
            'name' => 'required',
            'short_content' => 'required',
            'content' => 'required',
            'client_name' => 'required',
            'client_company' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'website' => 'required|url',
            'cost' => 'required',
            'client_comment' => 'required',
            'category_id' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
            'banner' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);



        $count = Portfolio::where('slug', $slug)->count();

        if ($count != 0) {
           $slug = $slug.'-1';
        }

        $id = Portfolio::insertGetId([
            "name" => $name,
            "slug" => $slug,
            "short_content" => $short_content,
            "content" => $content,
            "client_name" => $client_name,
            "client_company" => $client_company,
            "start_date" => $start_date,
            "end_date" => $end_date,
            "website" => $website,
            "cost" => $cost,
            "client_comment" => $client_comment,
            "category_id" => $category_id,
            "meta_title" => $meta_title,
            "meta_description" => $meta_description,
            "created_at" => $created_at,
        ]);

        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "protfolio_" .$id ."." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/portfolio/' . $photo_name));

            //  banner
        $protfolio_photo = $req->file('banner');
        $protfolio_photo_extention = $protfolio_photo->getClientOriginalExtension();
        $protfolio_photo_name = "protfolio_banner_" .$id ."." . $protfolio_photo_extention;
        Image::make($protfolio_photo)->save(base_path('public/uploads/banner/' . $protfolio_photo_name));

        Portfolio::find($id)->update([
            "photo" => $photo_name,
            "banner" => $protfolio_photo_name,
        ]);

        if($photos){
            foreach ($photos as $key => $photo) {
                $i = 1;
                $protfolio_photo_extention = $photo->getClientOriginalExtension();
                $photo_name = "protfolio_photo_" .$id ."." . $key + $i . ".". $protfolio_photo_extention;
                Image::make($photo)->save(base_path('public/uploads/portfolio_photos/' . $photo_name));

                Portfolio_photo::insert([
                    "photo" => $photo_name,
                    "portfolio_id" => $id,
                    "created_at" => $created_at,
                ]);
            }
        }


       return back()->with('success', 'You are success to add portfolio item');
   }



   // edit page
   public function edit_page($id)
   {
       return view('admin.portfolio_edit', [
           'portfolio' => Portfolio::find($id),
           'categorys' => Portfolio_category::all(),
       ]);
   }

   // edit
   public function edit(Request $req)
   {
       $id = $req->id;
       $name = $req->name;
       $short_content = $req->short_content;
       $content = $req->content;
       $client_name = $req->client_name;
       $client_company = $req->client_company;
       $start_date = $req->start_date;
       $end_date = $req->end_date;
       $website = $req->website;
       $cost = $req->cost;
       $client_comment = $req->client_comment;
       $category_id = $req->category_id;
       $meta_title = $req->meta_title;
       $meta_description = $req->meta_description;
       $photo = $req->file('photo');
       $banner = $req->file('banner');
       $photos = $req->file('photos');
       $created_at = Carbon::now();



       $req->validate([
           'name' => 'required',
           'short_content' => 'required',
           'content' => 'required',
           'client_name' => 'required',
           'client_company' => 'required',
           'start_date' => 'required',
           'end_date' => 'required',
           'website' => 'required|url',
           'cost' => 'required',
           'client_comment' => 'required',
           'category_id' => 'required',
           'meta_title' => 'required',
           'meta_description' => 'required',
       ]);




       if($photo){
           $req->validate([
               'photo' => 'required|file|image|mimes:jpeg,jpg,png',

           ]);
       }
       if($banner){
           $req->validate([
               'banner' => 'required|file|image|mimes:jpeg,jpg,png',
           ]);
       }

       Portfolio::find($id)->update([
           "name" => $name,
           "short_content" => $short_content,
           "content" => $content,
           "client_name" => $client_name,
           "client_company" => $client_company,
           "start_date" => $start_date,
           "end_date" => $end_date,
           "website" => $website,
           "cost" => $cost,
           "client_comment" => $client_comment,
           "category_id" => $category_id,
           "meta_title" => $meta_title,
           "meta_description" => $meta_description,
       ]);

       // photo update
       if($photo){
           $old_photo_name = Portfolio::find($id)->photo;
           unlink('uploads/portfolio/' . $old_photo_name);

           $photo = $req->file('photo');
           $photo_extention = $photo->getClientOriginalExtension();
           $photo_name = "portfolio_" . $id . "." . $photo_extention;
           Image::make($photo)->save(base_path('public/uploads/portfolio/' . $photo_name));

           Portfolio::find($id)->update([
               "photo" => $photo_name,
           ]);
       }
       // banner photo update
       if($banner){
           $old_photo_name = Portfolio::find($id)->banner;
           unlink('uploads/banner' . $old_photo_name);

           $photo = $req->file('banner');
           $photo_extention = $photo->getClientOriginalExtension();
           $photo_name = "portfolio_banner" . $id . "." . $photo_extention;
           Image::make($photo)->save(base_path('public/uploads/banner/' . $photo_name));

           Portfolio::find($id)->update([
               "banner" => $photo_name,
           ]);
       }
       // portfolio photo update
       if($photos){
           foreach ($photos as $key => $photo) {
                $check_isset_old_data = Portfolio_photo::where('portfolio_id', $id)->count();

                if ($check_isset_old_data == 0) {           //check_isset_old_data == 0 then start new 1
                    $i = 1;
                }else{                      //check_isset_old_data == 0 then start from last data number
                    $get_all_data = Portfolio_photo::where('portfolio_id', $id)->latest()->orderBy('id', 'desc')->take(1)->get();

                     foreach($get_all_data as $item){
                        $explode = explode(".", $item->photo);
                        $num = array_slice($explode,-2, 1)[0];
                        $i = $num + 1;
                    }
                }

                $protfolio_photo_extention = $photo->getClientOriginalExtension();
                $photo_name = "protfolio_photo_" .$id ."." . $key + $i . ".". $protfolio_photo_extention;
                Image::make($photo)->save(base_path('public/uploads/portfolio_photos/' . $photo_name));

                Portfolio_photo::insert([
                    "photo" => $photo_name,
                    "portfolio_id" => $id,
                    "created_at" => $created_at,
                ]);
            }
       }


       return back()->with('success', 'You are success to update portfolio item');
   }

   // p_delete single
   public function delete($id)
   {
       foreach(Portfolio_photo::where('portfolio_id', $id )->get() as $item){
        unlink('uploads/portfolio_photos/' . $item->photo);
        Portfolio_photo::find($item->id)->forceDelete();
       }

       $photo = Portfolio::find($id)->photo;
       $banner = Portfolio::find($id)->banner;
       unlink('uploads/portfolio/' . $photo);
       unlink('uploads/banner/' . $banner);
       Portfolio::find($id)->forceDelete();
       return back()->with('error', 'You are success delete your portfolio item');
   }


   // portfolio_photo_delete single
   public function portfolio_photo_delete($id)
   {
       $photo = Portfolio_photo::find($id)->photo;
       unlink('uploads/portfolio_photos/' . $photo);
       Portfolio_photo::find($id)->forceDelete();
       return back();
   }


}
