<?php

namespace App\Providers;

use App\Models\Designation;
use App\Models\Language;
use App\Models\News;
use App\Models\News_category;
use App\Models\Portfolio_category;
use App\Models\Portfolio_photo;
use App\Models\Setting;
use App\Models\Social;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        $language_text = Language::get();
        foreach($language_text as $language_all){
            define($language_all->name, $language_all->val);
        }

        view()->composer('*', function ($view) {
            $view->with('setting_data', Setting::find(1));
            $view->with('social', Social::where('social_url', '!=', '')->get());
            $view->with('latest_news', News::latest()->take(Setting::find(1)->total_recent_post)->get());
            $view->with('popular_news', News::orderBy('total_view', 'desc')->take(Setting::find(1)->total_populer_post)->get());
            $view->with('news_category', News_category::all());
            $view->with('portfolio_photo', Portfolio_photo::all());
            $view->with('portfolio_category', Portfolio_category::all());
            $view->with('designation', Designation::all());
            $view->with('user', User::all());
            $view->with('language', Language::all()->first());

         });
    }
}
