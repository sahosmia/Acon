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
use App\Http\Controllers\Admin\WhyChooseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::controller(FrontController::class)->group(function(){
    Route::get('/', 'index')->name('front');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
    Route::get('faq', 'faq')->name('faq');
    Route::get('gallery', 'gallery')->name('gallery');
    Route::get('news', 'news')->name('news');
    Route::get('news/{slug}/{id}', 'news_view');
    Route::get('category/view/{slug}/{id}', 'news_category_view');
    Route::get('portfolio', 'portfolio')->name('portfolio');
    Route::get('portfolio/{slug}/{id}', 'portfolio_view');
    Route::get('service', 'service')->name('service');
    Route::get('service/{slug}/{id}', 'service_view');
    Route::get('testimonial', 'testimonial')->name('testimonial');
    Route::get('term', 'term')->name('term');
    Route::get('privacy', 'privacy')->name('privacy');
    Route::post('search', 'search')->name('search');
    Route::post('contact_send_email', 'contact_send_email')->name('contact_send_email');
});


Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::view('admin/login', 'auth.login')->name('login_page');


Route::get('/home', [HomeController::class, 'index'])->name('home');

// profile
Route::get('admin/profile', [ProfileController::class, 'index'])->name('profile');

Route::post('admin/profile/update_information', [ProfileController::class, 'update_information'])->name('profile_update_information');

Route::post('admin/profile/update_photo', [ProfileController::class, 'update_photo'])->name('profile_update_photo');

Route::post('admin/profile/update_password', [ProfileController::class, 'update_password'])->name('profile_update_password');

Route::post('admin/profile/profile_add', [ProfileController::class, 'profile_add'])->name('profile_add');

/* --------------------------------------- */
/* comment  */
/* --------------------------------------- */

Route::get('admin/comment', [CommentController::class, 'index'])->name('admin.comment');
Route::post('admin/comment/edit', [CommentController::class, 'edit'])->name('admin.comment_edit');



/* --------------------------------------- */
/* designation  */
/* --------------------------------------- */



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


Route::controller(SettingsController::class)->prefix('admin/settings/')->group(function(){

    Route::get('/', 'index')->name('admin.settings');
    Route::post('logo_update', 'logo_update')->name('logo_update');
    Route::post('admin_logo_update', 'admin_logo_update')->name('admin_logo_update');
    Route::post('favicon_update', 'favicon_update')->name('favicon_update');
    Route::post('login_bg_update', 'login_bg_update')->name('login_bg_update');
    Route::post('generel_update', 'generel_update')->name('generel_update');
    Route::post('address_icon_update', 'address_icon_update')->name('address_icon_update');
    Route::post('phone_icon_update', 'phone_icon_update')->name('phone_icon_update');
    Route::post('working_hour_icon_update', 'working_hour_icon_update')->name('working_hour_icon_update');
    Route::post('email_update', 'email_update')->name('email_update');
    Route::post('sidebar_footer_update', 'sidebar_footer_update')->name('sidebar_footer_update');
    Route::post('why_choose_update', 'why_choose_update')->name('why_choose_update');
    Route::post('why_choose_main_photo_update', 'why_choose_main_photo_update')->name('why_choose_main_photo_update');
    Route::post('why_choose_item_photo_update', 'why_choose_item_photo_update')->name('why_choose_item_photo_update');
    Route::post('service_update', 'service_update')->name('service_update');
    Route::post('portfolio_update', 'portfolio_update')->name('portfolio_update');
    Route::post('team_update', 'team_update')->name('team_update');
    Route::post('testimonial_update', 'testimonial_update')->name('testimonial_update');
    Route::post('testimonial_main_photo_update', 'testimonial_main_photo_update')->name('testimonial_main_photo_update');
    Route::post('faq_update', 'faq_update')->name('faq_update');
    Route::post('faq_main_photo_update', 'faq_main_photo_update')->name('faq_main_photo_update');
    Route::post('gallery_update', 'gallery_update')->name('gallery_update');
    Route::post('recent_post_update', 'recent_post_update')->name('recent_post_update');
    Route::post('partner_update', 'partner_update')->name('partner_update');
    Route::post('counter_bg_update', 'counter_bg_update')->name('counter_bg_update');
    Route::post('counter_update', 'counter_update')->name('counter_update');
    Route::post('total_recent_post_update', 'total_recent_post_update')->name('total_recent_post_update');
    Route::post('color_update', 'color_update')->name('color_update');
    Route::post('other_update', 'other_update')->name('other_update');
    Route::post('about_banner_update', 'about_banner_update')->name('about_banner_update');
    Route::post('faq_banner_update', 'faq_banner_update')->name('faq_banner_update');
    Route::post('gallery_banner_update', 'gallery_banner_update')->name('gallery_banner_update');
    Route::post('service_banner_update', 'service_banner_update')->name('service_banner_update');
    Route::post('portfolio_banner_update', 'portfolio_banner_update')->name('portfolio_banner_update');
    Route::post('testimonial_banner_update', 'testimonial_banner_update')->name('testimonial_banner_update');
    Route::post('news_banner_update', 'news_banner_update')->name('news_banner_update');
    Route::post('contact_banner_update', 'contact_banner_update')->name('contact_banner_update');
    Route::post('search_banner_update', 'search_banner_update')->name('search_banner_update');
    Route::post('category_banner_update', 'category_banner_update')->name('category_banner_update');
    Route::post('terms_banner_update', 'terms_banner_update')->name('terms_banner_update');
    Route::post('privacy_banner_update', 'privacy_banner_update')->name('privacy_banner_update');

});





Route::prefix('admin')->name('admin.')->middleware('auth')->group(function() {



    /* ----------------------- slider  ------------------------ */

    Route::get('slider', [SliderController::class, 'index'])->name('slider');
    Route::get('slider/add', [SliderController::class, 'create'])->name('slider_add');
    Route::post('slider/insert', [SliderController::class, 'insert'])->name('slider_insert');
    Route::get('slider/edit/{id}', [SliderController::class, 'edit_page']);
    Route::post('slider/edit', [SliderController::class, 'edit'])->name('slider_edit');
    Route::get('slider/delete/{id}', [SliderController::class, 'delete']);




    /* --------------- social  -------------------- */

    Route::get('social', [SocialController::class, 'index'])->name('social');
    Route::post('socail/social_update', [SocialController::class, 'social_update'])->name('social_update');





    /* --------------------partner ---------------------- */
    Route::controller(PartnerController::class)->prefix('partner')->group(function(){
        Route::get('/', 'index')->name('partner');
        Route::get('/add', 'partner_add')->name('partner_add');
        Route::post('/insert', 'insert')->name('partner_insert');
        Route::get('/edit/{id}', 'edit_page');
        Route::post('/edit', 'edit')->name('partner_edit');
        Route::get('/delete/{id}', 'delete');
    });


    /* --------------------- team  --------------------- */
    Route::controller(TeamController::class)->prefix('team')->group(function(){
        Route::get('/', 'index')->name('team');
        Route::get('/add', 'team_add')->name('team_add');
        Route::post('/insert', 'insert')->name('team_insert');
        Route::get('/edit/{id}', 'edit_page');
        Route::post('/edit', 'edit')->name('team_edit');
        Route::get('/delete/{id}', 'delete');
    });






    Route::resource('portfolios', PortfolioController::class);
    Route::resource('designations', DesignationController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('why-chooses', WhyChooseController::class);
});








