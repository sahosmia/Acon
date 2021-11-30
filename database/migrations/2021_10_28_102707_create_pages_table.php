<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('mt_home');
            $table->text('md_home');
            $table->string('about_photo');
            $table->string('about_heading');
            $table->text('about_content');
            $table->string('mission_heading');
            $table->text('mission_content');
            $table->string('vision_heading');
            $table->text('vision_content');
            $table->string('mt_about');
            $table->text('md_about');
            $table->string('gallery_heading');
            $table->string('mt_gallery');
            $table->text('md_gallery');
            $table->string('faq_heading');
            $table->string('mt_faq');
            $table->text('md_faq');
            $table->string('service_heading');
            $table->string('mt_service');
            $table->text('md_service');
            $table->string('portfolio_heading');
            $table->string('mt_portfolio');
            $table->text('md_portfolio');
            $table->string('testimonial_heading');
            $table->string('mt_testimonial');
            $table->text('md_testimonial');
            $table->string('news_heading');
            $table->string('mt_news');
            $table->text('md_news');
            $table->string('contact_heading');
            $table->string('mt_contact');
            $table->text('md_contact');
            $table->string('search_heading');
            $table->string('mt_search');
            $table->text('md_search');
            $table->string('term_heading');
            $table->text('term_content');
            $table->string('mt_term');
            $table->text('md_term');
            $table->string('privacy_heading');
            $table->text('privacy_content');
            $table->string('mt_privacy');
            $table->text('md_privacy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
