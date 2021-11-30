<?php

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\News_categoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\Portfolio_categoryController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\Why_chooseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;



Route::get('/', [FrontController::class, 'index'])
    ->name('front');

Route::get('about', [FrontController::class, 'about'])
    ->name('about');

Route::get('contact', [FrontController::class, 'contact'])
    ->name('contact');

Route::get('faq', [FrontController::class, 'faq'])
    ->name('faq');

Route::get('gallery', [FrontController::class, 'gallery'])
    ->name('gallery');

Route::get('news', [FrontController::class, 'news'])
    ->name('news');
Route::get('news/{slug}/{id}', [FrontController::class, 'news_view']);
Route::get('category/view/{slug}/{id}', [FrontController::class, 'news_category_view']);


Route::get('portfolio', [FrontController::class, 'portfolio'])
    ->name('portfolio');

Route::get('portfolio/{slug}/{id}', [FrontController::class, 'portfolio_view']);

Route::get('service', [FrontController::class, 'service'])
    ->name('service');

Route::get('service/{slug}/{id}', [FrontController::class, 'service_view']);

Route::get('testimonial', [FrontController::class, 'testimonial'])
    ->name('testimonial');

Route::get('term', [FrontController::class, 'term'])
    ->name('term');

Route::get('privacy', [FrontController::class, 'privacy'])
    ->name('privacy');

Route::post('search', [FrontController::class, 'search'])
    ->name('search');

Route::post('contact_send_email', [FrontController::class, 'contact_send_email'])
    ->name('contact_send_email');



Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::view('admin/login', 'auth.login')
        ->name('login_page');


Route::get('/home', [HomeController::class, 'index'])
        ->name('home');

// profile
Route::get('admin/profile', [ProfileController::class, 'index'])
        ->name('profile');

Route::post('admin/profile/update_information', [ProfileController::class, 'update_information'])
        ->name('profile_update_information');

Route::post('admin/profile/update_photo', [ProfileController::class, 'update_photo'])
        ->name('profile_update_photo');

Route::post('admin/profile/update_password', [ProfileController::class, 'update_password'])
        ->name('profile_update_password');

Route::post('admin/profile/profile_add', [ProfileController::class, 'profile_add'])
        ->name('profile_add');

/* --------------------------------------- */
/* comment  */
/* --------------------------------------- */

Route::get('admin/comment', [CommentController::class, 'index'])->name('admin.comment');
Route::post('admin/comment/edit', [CommentController::class, 'edit'])->name('admin.comment_edit');



/* --------------------------------------- */
/* designation  */
/* --------------------------------------- */
Route::get('admin/designation', [DesignationController::class, 'index'])
        ->name('admin.designation');

Route::get('admin/designation/add', [DesignationController::class, 'designation_add_page'])
        ->name('admin.designation_add');

Route::post('admin/designation/insert', [DesignationController::class, 'insert'])
        ->name('admin.designation_insert');

Route::get('admin/designation/edit/{id}', [DesignationController::class, 'edit_page']);

Route::post('admin/designation/edit', [DesignationController::class, 'edit'])
        ->name('admin.designation_edit');

Route::get('admin/designation/delete/{id}', [DesignationController::class, 'delete']);


/* --------------------------------------- */
/* faq  */
/* --------------------------------------- */
Route::get('admin/faq', [FaqController::class, 'index'])
        ->name('admin.faq');

Route::get('admin/faq/add', [FaqController::class, 'faq_add'])
        ->name('admin.faq_add');

Route::post('admin/faq/insert', [FaqController::class, 'insert'])
        ->name('admin.faq_insert');

Route::get('admin/faq/edit/{id}', [FaqController::class, 'edit_page']);

Route::post('admin/faq/edit', [FaqController::class, 'edit'])
        ->name('admin.faq_edit');

Route::get('admin/faq/delete/{id}', [FaqController::class, 'delete']);



/* --------------------------------------- */
/* Gallery  */
/* --------------------------------------- */
Route::get('admin/photo', [PhotoController::class, 'index'])
        ->name('admin.photo');

Route::get('admin/photo/add', [PhotoController::class, 'photo_add'])
        ->name('admin.photo_add');

Route::post('admin/photo/insert', [PhotoController::class, 'insert'])
        ->name('admin.photo_insert');

Route::get('admin/photo/edit/{id}', [PhotoController::class, 'edit_page']);

Route::post('admin/photo/edit', [PhotoController::class, 'edit'])
        ->name('admin.photo_edit');

Route::get('admin/photo/delete/{id}', [PhotoController::class, 'delete']);



// Language
Route::get('admin/language', [LanguageController::class, 'index'])->name('admin.language');
Route::post('admin/language/edit', [LanguageController::class, 'edit'])->name('admin.language_edit');


// news
Route::get('admin/news', [NewsController::class, 'index'])
        ->name('admin.news');

Route::get('admin/news/add', [NewsController::class, 'news_add'])
        ->name('admin.news_add');

Route::post('admin/news/insert', [NewsController::class, 'insert'])
        ->name('admin.news_insert');

Route::get('admin/news/edit/{id}', [NewsController::class, 'edit_page']);
Route::post('admin/news/edit', [NewsController::class, 'edit'])
        ->name('admin.news_edit');

Route::get('admin/news/delete/{id}', [NewsController::class, 'delete']);



/* --------------------------------------- */
/* news_category  */
/* --------------------------------------- */
Route::get('admin/news_category', [News_categoryController::class, 'index'])
        ->name('admin.news_category');

Route::get('admin/news_category/add', [News_categoryController::class, 'news_category_add'])
        ->name('admin.news_category_add');

Route::post('admin/news_category/insert', [News_categoryController::class, 'insert'])
        ->name('admin.news_category_insert');

Route::get('admin/news_category/edit/{id}', [News_categoryController::class, 'edit_page']);

Route::post('admin/news_category/edit', [News_categoryController::class, 'edit'])
        ->name('admin.news_category_edit');

Route::get('admin/news_category/delete/{id}', [News_categoryController::class, 'delete']);


/* --------------------------------------- */
/* partner  */
/* --------------------------------------- */
Route::get('admin/partner', [PartnerController::class, 'index'])
        ->name('admin.partner');

Route::get('admin/parnter/add', [PartnerController::class, 'partner_add'])
        ->name('admin.partner_add');

Route::post('admin/partner/insert', [PartnerController::class, 'insert'])
        ->name('admin.partner_insert');

Route::get('admin/partner/edit/{id}', [PartnerController::class, 'edit_page']);

Route::post('admin/partner/edit', [PartnerController::class, 'edit'])
        ->name('admin.partner_edit');

Route::get('admin/partner/delete/{id}', [PartnerController::class, 'delete']);


// page
Route::get('admin/page', [PageController::class, 'index'])
        ->name('admin.page');

Route::post('admin/page/home_page_update', [PageController::class, 'home_page_update'])
        ->name('home_page_update');

Route::post('admin/page/about_page_photo_update', [PageController::class, 'about_page_photo_update'])
        ->name('about_page_photo_update');

Route::post('admin/page/about_page_information_update', [PageController::class, 'about_page_information_update'])
        ->name('about_page_information_update');

Route::post('admin/page/gallery_page_update', [PageController::class, 'gallery_page_update'])
        ->name('gallery_page_update');

Route::post('admin/page/faq_page_update', [PageController::class, 'faq_page_update'])
        ->name('faq_page_update');

Route::post('admin/page/service_page_update', [PageController::class, 'service_page_update'])
        ->name('service_page_update');

Route::post('admin/page/portfolio_page_update', [PageController::class, 'portfolio_page_update'])
        ->name('portfolio_page_update');

Route::post('admin/page/testimonial_page_update', [PageController::class, 'testimonial_page_update'])
        ->name('testimonial_page_update');

Route::post('admin/page/news_page_update', [PageController::class, 'news_page_update'])
        ->name('news_page_update');

Route::post('admin/page/contact_page_update', [PageController::class, 'contact_page_update'])
        ->name('contact_page_update');

Route::post('admin/page/search_page_update', [PageController::class, 'search_page_update'])
        ->name('search_page_update');

Route::post('admin/page/term_page_update', [PageController::class, 'term_page_update'])
        ->name('term_page_update');

Route::post('admin/page/privacy_page_update', [PageController::class, 'privacy_page_update'])
        ->name('privacy_page_update');





/* --------------------------------------- */
/* Portfolio  */
/* --------------------------------------- */
Route::get('admin/portfolio', [PortfolioController::class, 'index'])
        ->name('admin.portfolio');

Route::get('admin/portfolio/add', [PortfolioController::class, 'portfolio_add'])
        ->name('admin.portfolio_add');

Route::post('admin/portfolio/insert', [PortfolioController::class, 'insert'])
        ->name('admin.portfolio_insert');

Route::get('admin/portfolio/edit/{id}', [PortfolioController::class, 'edit_page']);

Route::post('admin/portfolio/edit', [PortfolioController::class, 'edit'])
        ->name('admin.portfolio_edit');

Route::get('admin/portfolio/delete/{id}', [PortfolioController::class, 'delete']);

Route::get('admin/portfolio/delete/portfolio_photo/{id}', [PortfolioController::class, 'portfolio_photo_delete']);


/* --------------------------------------- */
/* portfolio_category  */
/* --------------------------------------- */
Route::get('admin/portfolio_category', [Portfolio_categoryController::class, 'index'])
        ->name('admin.portfolio_category');

Route::get('admin/portfolio_category/add', [Portfolio_categoryController::class, 'portfolio_category_add'])
        ->name('admin.portfolio_category_add');

Route::post('admin/portfolio_category/insert', [Portfolio_categoryController::class, 'insert'])
        ->name('admin.portfolio_category_insert');

Route::get('admin/portfolio_category/edit/{id}', [Portfolio_categoryController::class, 'edit_page']);

Route::post('admin/portfolio_category/edit', [Portfolio_categoryController::class, 'edit'])
        ->name('admin.portfolio_category_edit');

Route::get('admin/portfolio_category/delete/{id}', [Portfolio_categoryController::class, 'delete']);


/* --------------------------------------- */
/* service  */
/* --------------------------------------- */
Route::get('admin/service', [ServiceController::class, 'index'])
        ->name('admin.service');

Route::get('admin/service/add', [ServiceController::class, 'service_add'])
        ->name('admin.service_add');

Route::post('admin/service/insert', [ServiceController::class, 'insert'])
        ->name('admin.service_insert');

Route::get('admin/service/edit/{id}', [ServiceController::class, 'edit_page']);

Route::post('admin/service/edit', [ServiceController::class, 'edit'])
        ->name('admin.service_edit');

Route::get('admin/service/delete/{id}', [ServiceController::class, 'delete']);



/* --------------------------------------- */
/* settings  */
/* --------------------------------------- */
Route::get('admin/settings', [SettingsController::class, 'index'])
        ->name('admin.settings');

Route::post('admin/settings/logo_update', [SettingsController::class, 'logo_update'])
        ->name('logo_update');

Route::post('admin/settings/admin_logo_update', [SettingsController::class, 'admin_logo_update'])
        ->name('admin_logo_update');

Route::post('admin/settings/favicon_update', [SettingsController::class, 'favicon_update'])
        ->name('favicon_update');

Route::post('admin/settings/login_bg_update', [SettingsController::class, 'login_bg_update'])
        ->name('login_bg_update');

Route::post('admin/settings/generel_update', [SettingsController::class, 'generel_update'])
        ->name('generel_update');

Route::post('admin/settings/address_icon_update', [SettingsController::class, 'address_icon_update'])
        ->name('address_icon_update');

Route::post('admin/settings/phone_icon_update', [SettingsController::class, 'phone_icon_update'])
        ->name('phone_icon_update');

Route::post('admin/settings/working_hour_icon_update', [SettingsController::class, 'working_hour_icon_update'])
        ->name('working_hour_icon_update');

Route::post('admin/settings/email_update', [SettingsController::class, 'email_update'])
        ->name('email_update');

Route::post('admin/settings/sidebar_footer_update', [SettingsController::class, 'sidebar_footer_update'])
        ->name('sidebar_footer_update');

Route::post('admin/settings/why_choose_update', [SettingsController::class, 'why_choose_update'])
        ->name('why_choose_update');

Route::post('admin/settings/why_choose_main_photo_update', [SettingsController::class, 'why_choose_main_photo_update'])
        ->name('why_choose_main_photo_update');

Route::post('admin/settings/why_choose_item_photo_update', [SettingsController::class, 'why_choose_item_photo_update'])
        ->name('why_choose_item_photo_update');

Route::post('admin/settings/service_update', [SettingsController::class, 'service_update'])
        ->name('service_update');

Route::post('admin/settings/portfolio_update', [SettingsController::class, 'portfolio_update'])
        ->name('portfolio_update');

Route::post('admin/settings/team_update', [SettingsController::class, 'team_update'])
        ->name('team_update');

Route::post('admin/settings/testimonial_update', [SettingsController::class, 'testimonial_update'])
        ->name('testimonial_update');

Route::post('admin/settings/testimonial_main_photo_update', [SettingsController::class, 'testimonial_main_photo_update'])
        ->name('testimonial_main_photo_update');

Route::post('admin/settings/faq_update', [SettingsController::class, 'faq_update'])
        ->name('faq_update');

Route::post('admin/settings/faq_main_photo_update', [SettingsController::class, 'faq_main_photo_update'])
        ->name('faq_main_photo_update');

Route::post('admin/settings/gallery_update', [SettingsController::class, 'gallery_update'])
        ->name('gallery_update');

Route::post('admin/settings/recent_post_update', [SettingsController::class, 'recent_post_update'])
        ->name('recent_post_update');

Route::post('admin/settings/partner_update', [SettingsController::class, 'partner_update'])
        ->name('partner_update');

Route::post('admin/settings/counter_bg_update', [SettingsController::class, 'counter_bg_update'])
        ->name('counter_bg_update');

Route::post('admin/settings/counter_update', [SettingsController::class, 'counter_update'])
        ->name('counter_update');

Route::post('admin/settings/total_recent_post_update', [SettingsController::class, 'total_recent_post_update'])
        ->name('total_recent_post_update');

Route::post('admin/settings/color_update', [SettingsController::class, 'color_update'])
        ->name('color_update');

Route::post('admin/settings/other_update', [SettingsController::class, 'other_update'])
        ->name('other_update');

Route::post('admin/settings/about_banner_update', [SettingsController::class, 'about_banner_update'])
        ->name('about_banner_update');

Route::post('admin/settings/faq_banner_update', [SettingsController::class, 'faq_banner_update'])
        ->name('faq_banner_update');

Route::post('admin/settings/gallery_banner_update', [SettingsController::class, 'gallery_banner_update'])
        ->name('gallery_banner_update');

Route::post('admin/settings/service_banner_update', [SettingsController::class, 'service_banner_update'])
        ->name('service_banner_update');

Route::post('admin/settings/portfolio_banner_update', [SettingsController::class, 'portfolio_banner_update'])
        ->name('portfolio_banner_update');

Route::post('admin/settings/testimonial_banner_update', [SettingsController::class, 'testimonial_banner_update'])
        ->name('testimonial_banner_update');

Route::post('admin/settings/news_banner_update', [SettingsController::class, 'news_banner_update'])
        ->name('news_banner_update');

Route::post('admin/settings/contact_banner_update', [SettingsController::class, 'contact_banner_update'])
        ->name('contact_banner_update');

Route::post('admin/settings/search_banner_update', [SettingsController::class, 'search_banner_update'])
        ->name('search_banner_update');

Route::post('admin/settings/category_banner_update', [SettingsController::class, 'category_banner_update'])
        ->name('category_banner_update');

Route::post('admin/settings/terms_banner_update', [SettingsController::class, 'terms_banner_update'])
        ->name('terms_banner_update');

Route::post('admin/settings/privacy_banner_update', [SettingsController::class, 'privacy_banner_update'])
        ->name('privacy_banner_update');



/* --------------------------------------- */
/* slider  */
/* --------------------------------------- */
Route::get('admin/slider', [SliderController::class, 'index'])
        ->name('admin.slider');

Route::get('admin/slider/add', [SliderController::class, 'slider_add'])
        ->name('admin.slider_add');

Route::post('admin/slider/insert', [SliderController::class, 'insert'])
        ->name('admin.slider_insert');

Route::get('admin/slider/edit/{id}', [SliderController::class, 'edit_page']);

Route::post('admin/slider/edit', [SliderController::class, 'edit'])
        ->name('admin.slider_edit');

Route::get('admin/slider/delete/{id}', [SliderController::class, 'delete']);


/* --------------------------------------- */
/* social  */
/* --------------------------------------- */
Route::get('admin/social', [SocialController::class, 'index'])
        ->name('admin.social');

Route::post('admin/socail/social_update', [SocialController::class, 'social_update'])
        ->name('admin.social_update');



/* --------------------------------------- */
/* team  */
/* --------------------------------------- */
Route::get('admin/team', [TeamController::class, 'index'])
        ->name('admin.team');

Route::get('admin/team/add', [TeamController::class, 'team_add'])
        ->name('admin.team_add');

Route::post('admin/team/insert', [TeamController::class, 'insert'])
        ->name('admin.team_insert');

Route::get('admin/team/edit/{id}', [TeamController::class, 'edit_page']);

Route::post('admin/team/edit', [TeamController::class, 'edit'])
        ->name('admin.team_edit');

Route::get('admin/team/delete/{id}', [TeamController::class, 'delete']);


/* --------------------------------------- */
/* testimonial  */
/* --------------------------------------- */
Route::get('admin/testimonial', [TestimonialController::class, 'index'])
        ->name('admin.testimonial');

Route::get('admin/testimonial/add', [TestimonialController::class, 'testimonial_add'])
        ->name('admin.testimonial_add');

Route::post('admin/testimonial/insert', [TestimonialController::class, 'insert'])
        ->name('admin.testimonial_insert');

Route::get('admin/testimonial/edit/{id}', [TestimonialController::class, 'edit_page']);

Route::post('admin/testimonial/edit', [TestimonialController::class, 'edit'])
        ->name('admin.testimonial_edit');

Route::get('admin/testimonial/delete/{id}', [TestimonialController::class, 'delete']);


/* --------------------------------------- */
/* why_choose  */
/* --------------------------------------- */
Route::get('admin/why_choose', [Why_chooseController::class, 'index'])
        ->name('admin.why_choose');

Route::get('admin/why_choose/add', [Why_chooseController::class, 'why_choose_add'])
        ->name('admin.why_choose_add');

Route::post('admin/why_choose/insert', [Why_chooseController::class, 'insert'])
        ->name('admin.why_choose_insert');

Route::get('admin/why_choose/edit/{id}', [Why_chooseController::class, 'edit_page']);

Route::post('admin/why_choose/edit', [Why_chooseController::class, 'edit'])
        ->name('admin.why_choose_edit');

Route::get('admin/why_choose/delete/{id}', [Why_chooseController::class, 'delete']);







