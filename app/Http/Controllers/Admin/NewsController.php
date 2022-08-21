<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\News_category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Image;
use Illuminate\Support\Str;

class NewsController extends Controller
{

  public function index()
  {
      return view('admin.news', [
          'newss' => News::paginate(10),
      ]);
  }

  // insert page
  public function news_add()
  {
        return view('admin.news_add',[
            'categorys' => News_category::all()
        ]);
  }

  // insert
  public function insert(Request $request){
        $title = $request->title;
        $short_content = $request->short_content;
        $content = $request->content;
        $comment = $request->comment;
        $category_id = $request->category_id;
        $meta_title = $request->meta_title;
        $meta_description = $request->meta_description;
        $created_at = Carbon::now();

        $request->validate([
            'title' => 'required',
            'short_content' => 'required',
            'content' => 'required',
            'comment' => 'required',
            'category_id' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
            'banner' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);

        $slug = strtolower(str_replace(" ","-",$request->title));
        $count = News::where('slug', $slug)->count();
        if ($count != 0) {
            $slug = $slug.'-1';
        }


      $id = News::insertGetId([
          "title" => $title,
          "slug" => $slug,
          "short_content" => $short_content,
          "content" => $content,
          "comment" => $comment,
          "category_id" => $category_id,
          "meta_title" => $meta_title,
          "meta_description" => $meta_description,
          "created_at" => $created_at,
          "added_by" => auth()->id(),
      ]);

      $photo = $request->file('photo');
      $photo_extention = $photo->getClientOriginalExtension();
      $photo_name = "news_" .$id ."." . $photo_extention;
      Image::make($photo)->save(base_path('public/uploads/news/' . $photo_name));

      $news_photo = $request->file('banner');
      $news_photo_extention = $news_photo->getClientOriginalExtension();
      $news_photo_name = "news_banner_" .$id ."." . $news_photo_extention;
      Image::make($news_photo)->save(base_path('public/uploads/banner/' . $news_photo_name));

      News::find($id)->update([
          "photo" => $photo_name,
          "banner" => $news_photo_name,
      ]);

      return back()->with('success', 'You are success to add news item');
  }

  // edit page
  public function edit_page($id)
  {
      return view('admin.news_edit', [
          'news' => News::find($id),
          'category' => News_category::all(),
      ]);
  }

  // edit
  public function edit(Request $req)
  {
      $id = $req->id;
      $title = $req->title;
      $short_content = $req->short_content;
      $content = $req->content;
      $comment = $req->comment;
      $category_id = $req->category_id;
      $meta_title = $req->meta_title;
      $meta_description = $req->meta_description;
      $photo = $req->file('photo');
      $banner = $req->file('banner');

      $req->validate([
          'title' => 'required',
          'short_content' => 'required',
          'content' => 'required',
          'comment' => 'required',
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

      News::find($id)->update([
          "title" => $title,
          "short_content" => $short_content,
          "content" => $content,
          "comment" => $comment,
          "category_id" => $category_id,
          "meta_title" => $meta_title,
          "meta_description" => $meta_description,
      ]);

      // photo update
      if($photo){
          $old_photo_name = News::find($id)->photo;
          unlink('uploads/news/' . $old_photo_name);

          $photo = $req->file('photo');
          $photo_extention = $photo->getClientOriginalExtension();
          $photo_name = "news_" . $id . "." . $photo_extention;
          Image::make($photo)->save(base_path('public/uploads/news/' . $photo_name));

          news::find($id)->update([
              "photo" => $photo_name,
          ]);
      }
      // banner photo update
      if($banner){
          $old_photo_name = news::find($id)->banner;
          unlink('uploads/banner/' . $old_photo_name);

          $photo = $req->file('banner');
          $photo_extention = $photo->getClientOriginalExtension();
          $photo_name = "news_banner" . $id . "." . $photo_extention;
          Image::make($photo)->save(base_path('public/uploads/banner/' . $photo_name));

          News::find($id)->update([
              "banner" => $photo_name,
          ]);
      }

      return back()->with('success', 'Data is Updated Successfull');
  }

  // p_delete single
  public function delete($id)
  {
      $photo = news::find($id)->photo;
      $banner = news::find($id)->banner;
      unlink('uploads/news/' . $photo);
      unlink('uploads/banner/' . $banner);
      News::find($id)->forceDelete();
      return back()->with('error', 'You are success delete your news');
  }



}
