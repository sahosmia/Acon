<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Image;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // view page
    public function index()
    {
        return view('admin.page', [
            'page' => Page::find(1),
        ]);
    }

     // home_page_update
     public function home_page_update(Request $req)
     {
         $req->validate([
            'mt_home' => 'required',
            'md_home' => 'required',
        ]);

        Page::find(1)->update([
            "mt_home" => $req->mt_home,
            "md_home" => $req->md_home,
        ]);
        return back()->with('success', 'You are success to update your home page');
     }

     // about_page_photo_update
     public function about_page_photo_update(Request $req)
     {
         $req->validate([
            'about_photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);
        $old_photo_name = Page::find(1)->about_photo;
        unlink('uploads/' . $old_photo_name);

        $photo = $req->file('about_photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "about_photo." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/' . $photo_name));

        Page::find(1)->update([
            "about_photo" => $photo_name,
        ]);
        return back()->with('success', 'Data is Updated Successfull');
     }

     // about_page_information_update
     public function about_page_information_update(Request $req)
     {
         $req->validate([
            'about_heading' => 'required',
            'about_content' => 'required',
            'vision_heading' => 'required',
            'vision_content' => 'required',
            'mission_heading' => 'required',
            'mission_content' => 'required',
            'mt_about' => 'required',
            'md_about' => 'required',
        ]);

        Page::find(1)->update([
            "about_heading" => $req->about_heading,
            "about_content" => $req->about_content,
            "vision_heading" => $req->vision_heading,
            "vision_content" => $req->vision_content,
            "mission_heading" => $req->mission_heading,
            "mission_content" => $req->mission_content,
            "mt_about" => $req->mt_about,
            "md_about" => $req->md_about,
        ]);
        return back()->with('success', 'Data is Updated Successfull');
     }

     // gallery_page_update
     public function gallery_page_update(Request $req)
     {
         $req->validate([
            'gallery_heading' => 'required',
            'mt_gallery' => 'required',
            'md_gallery' => 'required',
        ]);

        Page::find(1)->update([
            "gallery_heading" => $req->gallery_heading,
            "mt_gallery" => $req->mt_gallery,
            "md_gallery" => $req->md_gallery,
        ]);
        return back()->with('success', 'Data is Updated Successfull');
     }
     // faq_page_update
     public function faq_page_update(Request $req)
     {
         $req->validate([
            'faq_heading' => 'required',
            'mt_faq' => 'required',
            'md_faq' => 'required',
        ]);

        Page::find(1)->update([
            "faq_heading" => $req->faq_heading,
            "mt_faq" => $req->mt_faq,
            "md_faq" => $req->md_faq,
        ]);
        return back()->with('success', 'Data is Updated Successfull');
     }
     // service_page_update
     public function service_page_update(Request $req)
     {
         $req->validate([
            'service_heading' => 'required',
            'mt_service' => 'required',
            'md_service' => 'required',
        ]);

        Page::find(1)->update([
            "service_heading" => $req->service_heading,
            "mt_service" => $req->mt_service,
            "md_service" => $req->md_service,
        ]);
        return back()->with('success', 'Data is Updated Successfull');
     }
     // portfolio_page_update
     public function portfolio_page_update(Request $req)
     {
         $req->validate([
            'portfolio_heading' => 'required',
            'mt_portfolio' => 'required',
            'md_portfolio' => 'required',
        ]);

        Page::find(1)->update([
            "portfolio_heading" => $req->portfolio_heading,
            "mt_portfolio" => $req->mt_portfolio,
            "md_portfolio" => $req->md_portfolio,
        ]);
        return back()->with('success', 'Data is Updated Successfull');
     }
     // testimonial_page_update
     public function testimonial_page_update(Request $req)
     {
         $req->validate([
            'testimonial_heading' => 'required',
            'mt_testimonial' => 'required',
            'md_testimonial' => 'required',
        ]);

        Page::find(1)->update([
            "testimonial_heading" => $req->testimonial_heading,
            "mt_testimonial" => $req->mt_testimonial,
            "md_testimonial" => $req->md_testimonial,
        ]);
        return back()->with('success', 'Data is Updated Successfull');
     }
     // news_page_update
     public function news_page_update(Request $req)
     {
         $req->validate([
            'news_heading' => 'required',
            'mt_news' => 'required',
            'md_news' => 'required',
        ]);

        Page::find(1)->update([
            "news_heading" => $req->news_heading,
            "mt_news" => $req->mt_news,
            "md_news" => $req->md_news,
        ]);
        return back()->with('success', 'Data is Updated Successfull');
     }
     // contact_page_update
     public function contact_page_update(Request $req)
     {
         $req->validate([
            'contact_heading' => 'required',
            'mt_contact' => 'required',
            'md_contact' => 'required',
        ]);

        Page::find(1)->update([
            "contact_heading" => $req->contact_heading,
            "mt_contact" => $req->mt_contact,
            "md_contact" => $req->md_contact,
        ]);
        return back()->with('success', 'Data is Updated Successfull');
     }
     // search_page_update
     public function search_page_update(Request $req)
     {
         $req->validate([
            'search_heading' => 'required',
            'mt_search' => 'required',
            'md_search' => 'required',
        ]);

        Page::find(1)->update([
            "search_heading" => $req->search_heading,
            "mt_search" => $req->mt_search,
            "md_search" => $req->md_search,
        ]);
        return back()->with('success', 'Data is Updated Successfull');
     }
     // term_page_update
     public function term_page_update(Request $req)
     {
         $req->validate([
            'term_heading' => 'required',
            'term_content' => 'required',
            'mt_term' => 'required',
            'md_term' => 'required',
        ]);

        Page::find(1)->update([
            "term_heading" => $req->term_heading,
            "term_content" => $req->term_content,
            "mt_term" => $req->mt_term,
            "md_term" => $req->md_term,
        ]);
        return back()->with('success', 'Data is Updated Successfull');
     }
     // privacy_page_update
     public function privacy_page_update(Request $req)
     {
         $req->validate([
            'privacy_heading' => 'required',
            'privacy_content' => 'required',
            'mt_privacy' => 'required',
            'md_privacy' => 'required',
        ]);

        Page::find(1)->update([
            "privacy_heading" => $req->privacy_heading,
            "privacy_content" => $req->privacy_content,
            "mt_privacy" => $req->mt_privacy,
            "md_privacy" => $req->md_privacy,
        ]);
        return back()->with('success', 'Data is Updated Successfull');
     }

}
