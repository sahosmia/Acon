<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;

use App\Models\News;
use App\Models\News_category;
use App\Models\Portfolio;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'slider_count' => Slider::count(),
            'testimonial_count' => Testimonial::count(),
            'portfolio_count' => Portfolio::count(),
            'team_count' => Team::count(),
            'news_count' => News::count(),
            'news_category_count' => News_category::count(),
        ]);
    }
}
