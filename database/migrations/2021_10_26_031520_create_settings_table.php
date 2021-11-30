<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('logo_admin');
            $table->string('favicon');
            $table->string('counter_bg');
            $table->string('login_bg');
            $table->string('footer_copyright');
            $table->string('footer_address');
            $table->string('footer_phone');
            $table->string('footer_working_hour');
            $table->string('footer_address_icon');
            $table->string('footer_phone_icon');
            $table->string('footer_working_hour_icon');
            $table->text('footer_about');
            $table->string('top_bar_email');
            $table->string('top_bar_phone');
            $table->text('contact_map_iframe');
            $table->string('send_email_from');
            $table->string('receive_email_to');
            $table->integer('smtp_active');
            $table->integer('smtp_ssl');
            $table->string('smtp_host');
            $table->string('smtp_port');
            $table->string('smtp_username');
            $table->string('smtp_password');
            $table->integer('total_recent_post');
            $table->integer('total_popular_post');
            $table->integer('total_recent_post_home');
            $table->string('theme_color_1');
            $table->string('theme_color_2');
            $table->string('counter1_text');
            $table->integer('counter1_value');
            $table->string('counter2_text');
            $table->integer('counter2_value');
            $table->string('counter3_text');
            $table->integer('counter3_value');
            $table->string('counter4_text');
            $table->integer('counter4_value');
            $table->integer('counter_status');
            $table->string('banner_about');
            $table->string('banner_faq');
            $table->string('banner_gallery');
            $table->string('banner_service');
            $table->string('banner_portfolio');
            $table->string('banner_testimonial');
            $table->string('banner_news');
            $table->string('banner_contact');
            $table->string('banner_search');
            $table->string('banner_category');
            $table->string('banner_terms');
            $table->string('banner_privacy');
            $table->string('why_choose_title');
            $table->text('why_choose_subtitle');
            $table->integer('why_choose_status');
            $table->string('service_title');
            $table->text('service_subtitle');
            $table->integer('service_status');
            $table->string('portfolio_title');
            $table->text('portfolio_subtitle');
            $table->integer('portfolio_status');
            $table->string('team_title');
            $table->text('team_subtitle');
            $table->integer('team_status');
            $table->string('testimonial_title');
            $table->text('testimonial_subtitle');
            $table->integer('testimonial_status');
            $table->string('faq_title');
            $table->text('faq_subtitle');
            $table->integer('faq_status');
            $table->string('gallery_title');
            $table->text('gallery_subtitle');
            $table->integer('gallery_status');
            $table->string('recent_post_title');
            $table->text('recent_post_subtitle');
            $table->integer('recent_post_status');
            $table->string('partner_title');
            $table->text('partner_subtitle');
            $table->integer('partner_status');
            $table->integer('preloader_status');
            $table->string('faq_main_photo');
            $table->string('testimonial_main_photo');
            $table->string('why_choose_main_photo');
            $table->string('why_choose_item_bg');
            $table->text('tawk_live_chat_code');

            $table->integer('tawk_live_chat_status');
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
        Schema::dropIfExists('settings');
    }
}
