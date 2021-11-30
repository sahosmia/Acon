<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Faq;
use App\Models\News;
use App\Models\News_category;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Photo;
use App\Models\Portfolio;
use App\Models\Portfolio_category;
use App\Models\Portfolio_photo;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Why_choose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.front', [
            'sliders' => Slider::all(),
            'setting' => Setting::find(1),
            'faqs' => Faq::where('show', 2)->get(),
            'news' => News::take(Setting::find(1)->total_recent_post_home)->get(),
            'partners' => Partner::all(),
            'photos' => Photo::where('status', 1)->get(),
            'protfolio_categorys' => Portfolio_category::where('status', 1)->get(),
            'portfolios' => Portfolio::all(),
            'services' => Service::all(),
            'teams' => Team::all(),
            'testimonials' => Testimonial::all(),
            'why_chooses' => Why_choose::all(),
            'page' => Page::find(1),
            'setting' => Setting::find(1),

        ]);
    }

    // about
    public function about()
    {
        return view('front.about',[
            'about' => Page::find(1),
            'page' => Page::find(1),
            'setting' => Setting::find(1),
        ]);
    }

    // contact
    public function contact()
    {
        return view('front.contact',[
            'page' => Page::find(1),
            'setting' => Setting::find(1),
        ]);
    }

    // faq
    public function faq()
    {
        return view('front.faq',[
            'faqs' => Faq::all(),
            'page' => Page::find(1),
            'setting' => Setting::find(1),
        ]);
    }

    // gallery
    public function gallery()
    {
        return view('front.gallery',[
            'photos' => Photo::where('status', 1)->get(),
            'page' => Page::find(1),
            'setting' => Setting::find(1),
        ]);
    }

    // news
    public function news()
    {
        return view('front.news',[
            'news' => News::all(),
            'page' => Page::find(1),
            'setting' => Setting::find(1),
        ]);
    }

    // portfolio
    public function portfolio()
    {
        return view('front.portfolio',[
            'portfolio_categorys' => Portfolio_category::where('status', 1)->get(),
            'portfolios' => Portfolio::all(),
            'page' => Page::find(1),
            'setting' => Setting::find(1),

        ]);
    }
     // news_view
     public function news_view ($slug, $id)

     {
        $old_total_view = News::find($id)->total_view;
        $current_total_view = $old_total_view + 1;

        News::find($id)->update([
            "total_view" => $current_total_view,
        ]);

        $total_populer_post = Setting::find(1)->total_populer_post;
        $total_recent_post = Setting::find(1)->total_recent_post;

         return view('front.news_view',[
            'newss' => News::where('id', '!=', $id)->get(),
            'news' => News::find($id),
            'news_categorys' => News_category::all(),
            'news_latest' => News::latest()->take($total_recent_post)->get(),
            'news_populer' => News::orderBy('total_view', 'desc')->take($total_populer_post)->get(),
            'page' => Page::find(1),
            'setting' => Setting::find(1),

         ]);
     }

     // news_category_view
     public function news_category_view ($slug, $id)
     {
         return view('front.news_category',[
            'newss' => News::where('category_id', $id)->get(),
            'news' => News::find($id),
            'news_categorys' => News_category::find($id),
         ]);
     }

    // portfolio_view
    public function portfolio_view ($slug, $id)
    {
        return view('front.portfolio_view',[
            'portfolios' => Portfolio::where('id', '!=', $id)->get(),
            'portfolio' => Portfolio::find($id),
            'portfolio_photos' => Portfolio_photo::where('portfolio_id', $id)->get(),
            'portfolio_photo_total' => Portfolio_photo::where('portfolio_id', $id)->count(),
        ]);
    }



    // service
    public function service()
    {
        return view('front.service', [
            'services' => Service::all(),
            'page' => Page::find(1),
            'setting' => Setting::find(1),
        ]);
    }

    // search
    public function search(Request $req)
    {
        return view('front.search', [
            'items' => News::where('title','like','%'. $req->search_string.'%')->get(),
            'page' => Page::find(1),
            'setting' => Setting::find(1),
        ]);
    }

    // view
    public function service_view($slug, $id)
    {
        return view('front.service_view', [
            'service' => Service::find($id),
            'services' => Service::where('id', '!=', $id)->get(),

        ]);
    }

    // testimonial
    public function testimonial()
    {
        return view('front.testimonial', [
            'testimonials' => Testimonial::all(),
            'page' => Page::find(1),
            'setting' => Setting::find(1),
        ]);
    }

    // term
    public function term()
    {
        return view('front.term', [
            'term' => Page::find(1),
            'page' => Page::find(1),
            'setting' => Setting::find(1),
        ]);
    }
    // privacy
    public function privacy()
    {
        return view('front.privacy', [
            'privacy' => Page::find(1),

            'page' => Page::find(1),
            'setting' => Setting::find(1),
        ]);
    }


    public function contact_send_email(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ],[
            'name.required' => EMPTY_ERROR_NAME,
            'phone.required' => EMPTY_ERROR_PHONE,
            'email.required' => EMPTY_ERROR_EMAIL,
            'email.email' => VALID_ERROR_EMAIL,
            'message.required' => EMPTY_ERROR_COMMENT,
        ]);

        $subject = 'Contact Page Message';
        $admin_data = User::find(1)->email;

        $data = 'Name : '.$request->name.'<br>';
        $data .= 'Phone : '.$request->phone.'<br>';
        $data .= 'Email : '.$request->email.'<br>';
        $data .= 'Message : '.$request->message;

        Mail::to($admin_data)->send(new ContactMail($data));
        return back()->with('success', CONTACT_FORM_EMAIL_SUCCESS_MESSAGE);
    }

}
