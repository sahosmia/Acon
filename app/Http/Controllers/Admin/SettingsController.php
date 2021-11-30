<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Image;


class SettingsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
     // view page
     public function index(){
         return view('admin.setting', [
             'setting' => Setting::find(1),
         ]);
     }


     // logo update
     public function logo_update(Request $req){
         $req->validate([
            'photo_logo' => 'required|file|image|mimes:jpeg,jpg,png',
         ], [
            'photo_logo.required' => 'You must have to select a photo',
        ]);
        $old_photo_name = Setting::find(1)->logo;
        unlink('uploads/logo/' . $old_photo_name);

        $photo = $req->file('photo_logo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "logo." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/logo/' . $photo_name));

        Setting::find(1)->update([
            "logo" => $photo_name,
        ]);
        return back()->with('success', 'Logo is updated successfully!');
     }

     // admin_logo_update
     public function admin_logo_update(Request $req){

        $req->validate([
            'photo_logo_admin' => 'required|file|image|mimes:jpeg,jpg,png',
        ], [
            'photo_logo_admin.required' => 'You must have to select a photo',
        ]);

        $old_photo_name = Setting::find(1)->logo_admin;
        unlink('uploads/logo/' . $old_photo_name);

        $photo = $req->file('photo_logo_admin');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "logo_admin." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/logo/' . $photo_name));

        Setting::find(1)->update([
            "logo_admin" => $photo_name,
        ]);

        return back()->with('success', 'Logo is updated successfully!');
     }

     // favicon update
     public function favicon_update(Request $req){

         $req->validate([
            'photo_favicon' => 'required|file|image|mimes:jpeg,jpg,png',
        ], [
            'photo_favicon.required' => 'You must have to select a photo',
        ]);

        $old_photo_name = Setting::find(1)->favicon;
        unlink('uploads/logo/' . $old_photo_name);

        $photo = $req->file('photo_favicon');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "favicon." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/logo/' . $photo_name));

        Setting::find(1)->update([
            "favicon" => $photo_name,
        ]);

        return back()->with('success', 'Favicon is updated successfully!');
     }

     // login_bg update
     public function login_bg_update(Request $req){
         $req->validate([
            'login_bg' => 'required|file|image|mimes:jpeg,jpg,png',
        ], [
            'login_bg.required' => 'You must have to select a photo',
        ]);
        $old_photo_name = Setting::find(1)->login_bg;
        unlink('uploads/' . $old_photo_name);

        $photo = $req->file('login_bg');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "login_bg." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/' . $photo_name));

        Setting::find(1)->update([
            "login_bg" => $photo_name,
        ]);
        return back()->with('success', 'Login background is updated successfully!');
     }

     // generel update
     public function generel_update(Request $req){
         $req->validate([
            'footer_copyright' => 'required',
            'footer_address' => 'required',
            'footer_phone' => 'required',
            'footer_working_hour' => 'required',
            'footer_about' => 'required',
            'top_bar_email' => 'required',
            'top_bar_phone' => 'required',
            'contact_map_iframe' => 'required',
        ]);


        Setting::find(1)->update([
            "footer_copyright" => $req->footer_copyright,
            "footer_address" => $req->footer_address,
            "footer_phone" => $req->footer_phone,
            "footer_working_hour" => $req->footer_working_hour,
            "footer_about" => $req->footer_about,
            "top_bar_email" => $req->top_bar_email,
            "top_bar_phone" => $req->top_bar_phone,
            "contact_map_iframe" => $req->contact_map_iframe,

        ]);
        return back()->with('success', 'General Setting is updated successfully!');
     }


     // address_icon update
     public function address_icon_update(Request $req){
         $req->validate([
            'footer_address_icon' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);
        $old_photo_name = Setting::find(1)->footer_address_icon;
        unlink('uploads/footer_icon/' . $old_photo_name);


        $photo = $req->file('footer_address_icon');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "footer_address_icon." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/footer_icon/' . $photo_name));

        Setting::find(1)->update([
            "footer_address_icon" => $photo_name,
        ]);
        return back()->with('success', 'Footer Address Icon is updated successfully!');
     }

     // phone_icon update
     public function phone_icon_update(Request $req){
         $req->validate([
            'footer_phone_icon' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);
        $old_photo_name = Setting::find(1)->footer_phone_icon;
        unlink('uploads/footer_icon/' . $old_photo_name);


        $photo = $req->file('footer_phone_icon');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "footer_phone_icon." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/footer_icon/' . $photo_name));

        Setting::find(1)->update([
            "footer_phone_icon" => $photo_name,
        ]);
        return back()->with('success', 'Footer Phone Icon is updated successfully!');
     }

     // working_hour_icon update
     public function working_hour_icon_update(Request $req){
         $req->validate([
            'footer_working_hour_icon' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);
        $old_photo_name = Setting::find(1)->footer_working_hour_icon;
        unlink('uploads/footer_icon/' . $old_photo_name);


        $photo = $req->file('footer_working_hour_icon');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "footer_working_hour_icon." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/footer_icon/' . $photo_name));

        Setting::find(1)->update([
            "footer_working_hour_icon" => $photo_name,
        ]);
        return back()->with('success', 'Footer Working Hour Icon is updated successfully!');
     }


     // generel email_update
     public function email_update(Request $req){
        $req->validate([
            'send_email_from' => 'required',
            'receive_email_to' => 'required',
            'smtp_active' => 'required',
            'smtp_ssl' => 'required',
            'smtp_host' => 'required',
            'smtp_port' => 'required',
            'smtp_username' => 'required',
            'smtp_password' => 'required',
        ]);

        Setting::find(1)->update([
            "send_email_from" => $req->send_email_from,
            "receive_email_to" => $req->receive_email_to,
            "smtp_active" => $req->smtp_active,
            "smtp_ssl" => $req->smtp_ssl,
            "smtp_host" => $req->smtp_host,
            "smtp_port" => $req->smtp_port,
            "smtp_username" => $req->smtp_username,
            "smtp_password" => $req->smtp_password,
        ]);
        return back()->with('success', 'Email Setting is updated successfully!');
     }

     // generel email_update
     public function sidebar_footer_update(Request $req){
        $req->validate([
            'total_recent_post' => 'required',
            'total_popular_post' => 'required',
        ]);

        Setting::find(1)->update([
            "total_recent_post" => $req->total_recent_post,
            "total_popular_post" => $req->total_popular_post,
        ]);
        return back()->with('success', 'Sidebar Footer Setting is updated successfully!');
     }



     // why_choose_update update
     public function why_choose_update(Request $req){
        $req->validate([
            'why_choose_title' => 'required',
            'why_choose_subtitle' => 'required',
            'why_choose_status' => 'required',
        ]);

        Setting::find(1)->update([
            "why_choose_title" => $req->why_choose_title,
            "why_choose_subtitle" => $req->why_choose_subtitle,
            "why_choose_status" => $req->why_choose_status,

        ]);
        return back()->with('success', 'Why Choose Setting (Home Page) is updated successfully!');
     }
     // why_choose_main_photo_update update
     public function why_choose_main_photo_update(Request $req){
        $req->validate([
            'why_choose_main_photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);

        $old_photo_name = Setting::find(1)->why_choose_main_photo;
        unlink('uploads/' . $old_photo_name);

        $photo = $req->file('why_choose_main_photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "why_choose_main_photo." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/' . $photo_name));

        Setting::find(1)->update([
            "why_choose_main_photo" => $photo_name,
        ]);
        return back()->with('success', 'Why Choose Main Photo (Home Page) is updated successfully!');
     }

     // why_choose_item_photo_update update
     public function why_choose_item_photo_update(Request $req){
        $req->validate([
            'why_choose_item_bg' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);

        $old_photo_name = Setting::find(1)->why_choose_item_bg;
        unlink('uploads/' . $old_photo_name);

        $photo = $req->file('why_choose_item_bg');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "why_choose_item_bg." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/' . $photo_name));

        Setting::find(1)->update([
            "why_choose_item_bg" => $photo_name,
        ]);
        return back()->with('success', 'Why Choose Item Photo (Home Page) is updated successfully!');
     }

     // testimonial_main_photo_update update
     public function testimonial_main_photo_update(Request $req){
        $req->validate([
            'testimonial_main_photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);
        $old_photo_name = Setting::find(1)->testimonial_main_photo;
        unlink('uploads/' . $old_photo_name);

        $photo = $req->file('testimonial_main_photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "testimonial_main_photo." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/' . $photo_name));

        Setting::find(1)->update([
            "testimonial_main_photo" => $photo_name,
        ]);
        return back()->with('success', 'Testimonial Settings (Home Page) is updated successfully!');
     }

     // faq_main_photo_update update
     public function faq_main_photo_update(Request $req){
        $req->validate([
            'faq_main_photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);
         $old_photo_name = Setting::find(1)->faq_main_photo;
        unlink('uploads/' . $old_photo_name);

        $photo = $req->file('faq_main_photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "faq_main_photo." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/' . $photo_name));

        Setting::find(1)->update([
            "faq_main_photo" => $photo_name,
        ]);
        return back()->with('success', 'Faq Main Photo (Home Page) is updated successfully!');
     }

     // service_update update
     public function service_update(Request $req){
        $req->validate([
            'service_title' => 'required',
            'service_subtitle' => 'required',
            'service_status' => 'required',
        ]);

        Setting::find(1)->update([
            "service_title" => $req->service_title,
            "service_subtitle" => $req->service_subtitle,
            "service_status" => $req->service_status,
        ]);

        return back()->with('success', 'Service Setting (Home Page) is updated successfully!');
     }

     // portfolio_update update
     public function portfolio_update(Request $req){
        $req->validate([
            'portfolio_title' => 'required',
            'portfolio_subtitle' => 'required',
            'portfolio_status' => 'required',
        ]);

        Setting::find(1)->update([
            "portfolio_title" => $req->portfolio_title,
            "portfolio_subtitle" => $req->portfolio_subtitle,
            "portfolio_status" => $req->portfolio_status,
        ]);
        return back()->with('success', 'Portfolio Settings (Home Page) is updated successfully!');
     }

     // team_update update
     public function team_update(Request $req){
        $req->validate([
            'team_title' => 'required',
            'team_subtitle' => 'required',
            'team_status' => 'required',
        ]);

        Setting::find(1)->update([
            "team_title" => $req->team_title,
            "team_subtitle" => $req->team_subtitle,
            "team_status" => $req->team_status,
        ]);
        return back()->with('success', 'Team Settings (Home Page) is updated successfully!');
     }

     // testimonial_update update
     public function testimonial_update(Request $req){
        $req->validate([
            'testimonial_title' => 'required',
            'testimonial_subtitle' => 'required',
            'testimonial_status' => 'required',
        ]);

        Setting::find(1)->update([
            "testimonial_title" => $req->testimonial_title,
            "testimonial_subtitle" => $req->testimonial_subtitle,
            "testimonial_status" => $req->testimonial_status,
        ]);
        return back()->with('success', 'Testimonial Settings (Home Page) is updated successfully!');
     }

     // faq_update update
     public function faq_update(Request $req){
        $req->validate([
            'faq_title' => 'required',
            'faq_subtitle' => 'required',
            'faq_status' => 'required',
        ]);

        Setting::find(1)->update([
            "faq_title" => $req->faq_title,
            "faq_subtitle" => $req->faq_subtitle,
            "faq_status" => $req->faq_status,
        ]);
        return back()->with('success', 'Faq Settings (Home Page) is updated successfully!');
     }

     // gallery_update update
     public function gallery_update(Request $req){
        $req->validate([
            'gallery_title' => 'required',
            'gallery_subtitle' => 'required',
            'gallery_status' => 'required',
        ]);

        Setting::find(1)->update([
            "gallery_title" => $req->gallery_title,
            "gallery_subtitle" => $req->gallery_subtitle,
            "gallery_status" => $req->gallery_status,
        ]);
        return back()->with('success', 'Gallery Settings (Home Page) is updated successfully!');
     }

     // working_hour_icon update
     public function recent_post_update(Request $req){
        $req->validate([
            'recent_post_title' => 'required',
            'recent_post_subtitle' => 'required',
            'recent_post_status' => 'required',
        ]);

        Setting::find(1)->update([
            "recent_post_title" => $req->recent_post_title,
            "recent_post_subtitle" => $req->recent_post_subtitle,
            "recent_post_status" => $req->recent_post_status,
        ]);
        return back()->with('success', 'Recent Post Settings (Home Page) is updated successfully!');
     }

     // partner_update update
     public function partner_update(Request $req){
        $req->validate([
            'partner_title' => 'required',
            'partner_subtitle' => 'required',
            'partner_status' => 'required',
        ]);

        Setting::find(1)->update([
            "partner_title" => $req->partner_title,
            "partner_subtitle" => $req->partner_subtitle,
            "partner_status" => $req->partner_status,
        ]);
        return back()->with('success', 'Partner Settings (Home Page) is updated successfully!');
     }

     // counter_bg_update update
     public function counter_bg_update(Request $req){
         $req->validate([
            'counter_bg' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);

        $photo = $req->file('counter_bg');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "counter_bg." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/' . $photo_name));

        Setting::find(1)->update([
            "counter_bg" => $photo_name,
        ]);
        return back()->with('success', 'Counter Background Settings (Home Page) is updated successfully!');
     }

     // counter_update update
     public function counter_update(Request $req){

        $req->validate([
            'counter1_text' => 'required',
            'counter1_value' => 'required',
            'counter2_text' => 'required',
            'counter2_value' => 'required',
            'counter3_text' => 'required',
            'counter3_value' => 'required',
            'counter4_text' => 'required',
            'counter4_value' => 'required',
            'counter_status' => 'required',
        ]);

        Setting::find(1)->update([
            "counter1_text" => $req->counter1_text,
            "counter1_value" => $req->counter1_value,
            "counter2_text" => $req->counter2_text,
            "counter2_value" => $req->counter2_value,
            "counter3_text" => $req->counter3_text,
            "counter3_value" => $req->counter3_value,
            "counter4_text" => $req->counter4_text,
            "counter4_value" => $req->counter4_value,
            "counter_status" => $req->counter_status,
        ]);
        return back()->with('success', 'Counter Settings (Home Page) is updated successfully!');
     }

     // total_recent_post_update
     public function total_recent_post_update(Request $req){
        $req->validate([
            'total_recent_post_home' => 'required',
        ]);

        Setting::find(1)->update([
            "total_recent_post_home" => $req->total_recent_post_home,
        ]);
        return back()->with('success', 'Total Recent Post Settings (Home Page) is updated successfully!');
     }

     // total_recent_post_update
     public function color_update(Request $req){
        $req->validate([
            'theme_color_1' => 'required',
            'theme_color_2' => 'required',
        ]);

        Setting::find(1)->update([
            "theme_color_1" => $req->theme_color_1,
            "theme_color_2" => $req->theme_color_2,
        ]);
        return back()->with('success', 'Color Settings (Home Page) is updated successfully!');
     }

     // other_update
     public function other_update(Request $req){
        $req->validate([
            'tawk_live_chat_status' => 'required',
            'tawk_live_chat_code' => 'required',
            'preloader_status' => 'required',
        ]);

        Setting::find(1)->update([
            "tawk_live_chat_status" => $req->tawk_live_chat_status,
            "tawk_live_chat_code" => $req->tawk_live_chat_code,
            "preloader_status" => $req->preloader_status,
        ]);
        return back()->with('success', 'Other Settings (Home Page) is updated successfully!');
     }

     // about_banner_update
     public function about_banner_update(Request $req){
        $req->validate([
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);
        $old_photo_name = Setting::find(1)->banner_about;
        unlink('uploads/banner/' . $old_photo_name);

        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "banner_about." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/banner/' . $photo_name));

        Setting::find(1)->update([
            "banner_about" => $photo_name,
        ]);
        return back()->with('success', 'About Banner is updated successfully!');
     }

     // faq_banner_update
     public function faq_banner_update(Request $req){
        $req->validate([
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);
        $old_photo_name = Setting::find(1)->banner_faq;
        unlink('uploads/banner/' . $old_photo_name);


        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "banner_faq." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/banner/' . $photo_name));

        Setting::find(1)->update([
            "banner_faq" => $photo_name,
        ]);
        return back()->with('success', 'Faq Banner is updated successfully!');
     }

     // gallery_banner_update
     public function gallery_banner_update(Request $req)
     {

        $req->validate([
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);
         $old_photo_name = Setting::find(1)->banner_gallery;
        unlink('uploads/banner/' . $old_photo_name);


        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "banner_gallery." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/banner/' . $photo_name));

        Setting::find(1)->update([
            "banner_gallery" => $photo_name,
        ]);
        return back()->with('success', 'Gallery Banner is updated successfully!');
     }

     // service_banner_update
     public function service_banner_update(Request $req)
     {

        $req->validate([
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);
         $old_photo_name = Setting::find(1)->banner_service;
        unlink('uploads/banner/' . $old_photo_name);


        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "banner_service." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/banner/' . $photo_name));

        Setting::find(1)->update([
            "banner_service" => $photo_name,
        ]);
        return back()->with('success', 'Service Banner is updated successfully!');
     }

     // portfolio_banner_update
     public function portfolio_banner_update(Request $req)
     {

        $req->validate([
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);
         $old_photo_name = Setting::find(1)->banner_portfolio;
        unlink('uploads/banner/' . $old_photo_name);


        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "banner_portfolio." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/banner/' . $photo_name));

        Setting::find(1)->update([
            "banner_portfolio" => $photo_name,
        ]);
        return back()->with('success', 'Portfolio Banner is updated successfully!');
     }

     // testimonial_banner_update
     public function testimonial_banner_update(Request $req)
     {

        $req->validate([
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);
         $old_photo_name = Setting::find(1)->banner_testimonial;
        unlink('uploads/banner/' . $old_photo_name);


        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "banner_testimonial." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/banner/' . $photo_name));

        Setting::find(1)->update([
            "banner_testimonial" => $photo_name,
        ]);
        return back()->with('success', 'Testimonial Banner is updated successfully!');
     }

     // news_banner_update
     public function news_banner_update(Request $req)
     {

        $req->validate([
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);
         $old_photo_name = Setting::find(1)->banner_news;
        unlink('uploads/banner/' . $old_photo_name);


        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "banner_news." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/banner/' . $photo_name));

        Setting::find(1)->update([
            "banner_news" => $photo_name,
        ]);
        return back()->with('success', 'News Banner is updated successfully!');
     }

     // contact_banner_update
     public function contact_banner_update(Request $req){
        $req->validate([
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);
        $old_photo_name = Setting::find(1)->banner_contact;
        unlink('uploads/banner/' . $old_photo_name);

        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "banner_contact." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/banner/' . $photo_name));

        Setting::find(1)->update([
            "banner_contact" => $photo_name,
        ]);
        return back()->with('success', 'Contact Banner is updated successfully!');
     }

     // search_banner_update
     public function search_banner_update(Request $req){
        $req->validate([
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);

        $old_photo_name = Setting::find(1)->banner_search;
        unlink('uploads/banner/' . $old_photo_name);

        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "banner_search." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/banner/' . $photo_name));

        Setting::find(1)->update([
            "banner_search" => $photo_name,
        ]);
        return back()->with('success', 'Search Banner is updated successfully!');
     }

     // category_banner_update
     public function category_banner_update(Request $req){
        $req->validate([
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);

        $old_photo_name = Setting::find(1)->banner_category;
        unlink('uploads/banner/' . $old_photo_name);

        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "banner_category." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/banner/' . $photo_name));

        Setting::find(1)->update([
            "banner_category" => $photo_name,
        ]);
        return back()->with('success', 'Category Banner is updated successfully!');
     }

     // terms_banner_update
     public function terms_banner_update(Request $req){
        $req->validate([
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);

        $old_photo_name = Setting::find(1)->banner_terms;
        unlink('uploads/banner/' . $old_photo_name);


        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "banner_terms." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/banner/' . $photo_name));

        Setting::find(1)->update([
            "banner_terms" => $photo_name,
        ]);
        return back()->with('success', 'Terms Banner is updated successfully!');
     }

     // privacy_banner_update
     public function privacy_banner_update(Request $req){

        $req->validate([
            'photo' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);

        $old_photo_name = Setting::find(1)->banner_privacy;
        unlink('uploads/banner/' . $old_photo_name);

        $photo = $req->file('photo');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "banner_privacy." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/banner/' . $photo_name));

        Setting::find(1)->update([
            "banner_privacy" => $photo_name,
        ]);
        return back()->with('success', 'Privacy Banner is updated successfully!');
     }


}
