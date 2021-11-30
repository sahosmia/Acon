<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'mt_home',
        'md_home',
        'about_photo',
        'about_heading',
        'about_content',
        'mission_heading',
        'mission_content',
        'vision_heading',
        'vision_content',
        'mt_about',
        'md_about',
        'gallery_heading',
        'mt_gallery',
        'md_gallery',
        'faq_heading',
        'mt_faq',
        'md_faq',
        'service_heading',
        'mt_service',
        'md_service',
        'portfolio_heading',
        'mt_portfolio',
        'md_portfolio',
        'testimonial_heading',
        'mt_testimonial',
        'md_testimonial',
        'news_heading',
        'mt_news',
        'md_news',
        'contact_heading',
        'mt_contact',
        'md_contact',
        'search_heading',
        'mt_search',
        'md_search',
        'term_heading',
        'term_content',
        'mt_term',
        'md_term',
        'privacy_heading',
        'privacy_content',
        'mt_privacy',
        'md_privacy',
    ];
}
