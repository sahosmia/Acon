<!DOCTYPE html>
<html>
<head>

	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta charset="UTF-8">

    <meta name="description" content="@yield('meta_description')">
	<title>@yield('meta_title')</title>

	<link href="https://fonts.googleapis.com/css?family=Francois+One|Lato:400,700" rel="stylesheet">

	<link rel="icon" href="{{ asset('uploads/logo') }}/{{ $setting_data->favicon }}" type="image/png">

	<link rel='stylesheet' href='{{ asset('front/css/animate.min.css') }}'>
	<link rel='stylesheet' href='{{ asset('front/css/bootstrap.min.css') }}'>
	<link rel='stylesheet' href='{{ asset('front/css/datepicker3.css') }}'>
	<link rel='stylesheet' href='{{ asset('front/css/font-awesome.min.css') }}'>
	<link rel='stylesheet' href='{{ asset('front/css/lightbox.min.css') }}'>
	<link rel='stylesheet' href='{{ asset('front/css/owl.carousel.min.css') }}'>
	<link rel='stylesheet' href='{{ asset('front/css/hover-min.css') }}'>
	<link rel='stylesheet' href='{{ asset('front/css/meanmenu.css') }}'>
	<link rel='stylesheet' href='{{ asset('front/css/spacing.css') }}'>
	<link rel='stylesheet' href='{{ asset('front/css/style.css') }}'>
	<link rel='stylesheet' href='{{ asset('front/css/responsive.css') }}'>
	<link rel='stylesheet' href='{{ asset('front/style.css') }}'>

	<style>

		/* Theme Color 1 */
		.header-area,
		.slider-animated li a,
		.services-text,
		.team-text,
		.faq-gallery .panel-default > .panel-heading,
		.recent-text,
		.caption-text,
		.blog-text,
		.footer-main,
		.mission-icon,
		.testimonial-area.main-testimonial .testimonial-detail,
		.main-testimonial .testimonial-carousel .owl-dots .owl-dot,
		.contact-area button {
			background: #{{ $setting_data->theme_color_1 }} !important;
		}
		.bg-choose {
			background-color: #{{ $setting_data->theme_color_1 }} !important;
		}
		ul.nav-menu li a,
		.team-carousel.owl-carousel .owl-nav .owl-prev,
		.team-carousel.owl-carousel .owl-nav .owl-next,
		.blog-carousel.owl-carousel .owl-nav .owl-prev,
		.blog-carousel.owl-carousel .owl-nav .owl-next,
		.brand-carousel.owl-carousel .owl-nav .owl-prev,
		.brand-carousel.owl-carousel .owl-nav .owl-next {
			color: #{{ $setting_data->theme_color_1 }} !important;
		}
		.slider-animated li a,
		.team-carousel.owl-carousel .owl-nav .owl-prev,
		.team-carousel.owl-carousel .owl-nav .owl-next,
		.blog-carousel.owl-carousel .owl-nav .owl-prev,
		.blog-carousel.owl-carousel .owl-nav .owl-next,
		.brand-carousel.owl-carousel .owl-nav .owl-prev,
		.brand-carousel.owl-carousel .owl-nav .owl-next {
			border-color: #{{ $setting_data->theme_color_1 }} !important;
		}


		/* Theme Color 2 */
		ul.nav-menu li ul li a:before,
		.slider-animated li:last-child a,
		.client-name,
		.testimonial-carousel .owl-dots .owl-dot.active,
		.team-social li a:hover,
		.faq-gallery .panel-group .panel-heading a:after,
		.caption-bg,
		.lightbox-bg,
		.hvr-bounce-to-right::before,
		.blog-author li.gro,
		.footer-contact-area,
		.sidebar-item h3:before,
		.searchbar-item button.btn:hover,
		.single-blog-author li.gro,
		.scroll-top,
		.contact-area button:hover {
			background: #{{ $setting_data->theme_color_2 }} !important;
		}
		.services-link a {
			background-color: #{{ $setting_data->theme_color_2 }} !important;
		}
		ul.nav-menu li a:hover,
		.header-social a:hover,
		.slide-carousel.owl-carousel .owl-nav .owl-prev:hover,
		.slide-carousel.owl-carousel .owl-nav .owl-next:hover,
		.choose-text h3,
		.services-text h3 a,
		.lightbox-icon a:hover,
		.team-carousel.owl-carousel .owl-nav .owl-prev:hover,
		.team-carousel.owl-carousel .owl-nav .owl-next:hover,
		.faq-gallery h4.panel-title a:hover,
		.caption-icon a:hover,
		.blog-carousel.owl-carousel .owl-nav .owl-prev:hover,
		.blog-carousel.owl-carousel .owl-nav .owl-next:hover,
		.blog-text h3 a,
		.brand-carousel.owl-carousel .owl-nav .owl-prev:hover,
		.brand-carousel.owl-carousel .owl-nav .owl-next:hover,
		.mission-icon,
		.sidebar-item li a:hover,
		.carousel-inner .lightbox-inner a {
			color: #{{ $setting_data->theme_color_2 }} !important;
		}
		.slide-carousel.owl-carousel .owl-nav .owl-prev:hover,
		.slide-carousel.owl-carousel .owl-nav .owl-next:hover,
		.slider-animated li:last-child a,
		.choose-icon img,
		.team-carousel.owl-carousel .owl-nav .owl-prev:hover,
		.team-carousel.owl-carousel .owl-nav .owl-next:hover,
		.team-text,
		.testimonial-carousel .owl-dots .owl-dot.active,
		.team-social li a:hover,
		.blog-carousel.owl-carousel .owl-nav .owl-prev:hover,
		.blog-carousel.owl-carousel .owl-nav .owl-next:hover,
		.brand-carousel.owl-carousel .owl-nav .owl-prev:hover,
		.brand-carousel.owl-carousel .owl-nav .owl-next:hover,
		.carousel-indicators li,
		.form-control:focus,
		.contact-area button:hover {
			border-color: #{{ $setting_data->theme_color_2 }} !important;
		}
		ul.nav-menu li ul,
		.services-text,
		.recent-text,
		.caption-text,
		.blog-text {
			border-top-color: #{{ $setting_data->theme_color_2 }} !important;
		}
		.single-service-photo img {
			border-bottom-color: #{{ $setting_data->theme_color_2 }} !important;
		}



		.slider-animated li a:hover {
			background: #333!important;
			border-color: #333!important;
		}

		.slider-animated li:last-child a:hover {
			background: #333!important;
			border-color: #333!important;
			color: #fff!important;
		}

	</style>

</head>

<body>

@if ($setting_data->preloader_status == 1)
	<div id="preloader">
		<div id="status" style="background-image: url('{{ asset('img/preloader.gif') }}')"></div>
	</div>
@endif

	<div class="header-area">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<div class="header-contact">
						<ul>
							<li>
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<span>{{ $setting_data->top_bar_email }}</span>
							</li>
							<li>
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>{{ $setting_data->top_bar_phone }}</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="header-social">
						<ul>
                            @foreach ($social as $item)
                            <li><a href="{{ $item->social_url }}"><i class="{{ $item->social_icon }}"></i></a></li>
                            @endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="strickymenu" class="menu-area">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="logo">
						<a href="{{ route('front') }}"><img src="{{ asset('uploads/logo') }}/{{ $setting_data->logo }}" alt="Logo"></a>
					</div>
				</div>
				<div class="col-md-9 col-sm-12 main-menu d-block" >
					<div class="main-menu-item">
				 		<ul class="nav-menu">
				 			<li><a href="{{ route('front') }}">{{ HOME }}</a></li>
							<li class="menu-item-has-children"><a href="javascript:void();">{{ PAGE }}</a>
								<ul class="sub-menu">
									<li><a href="{{route('about')}}">{{ ABOUT }}</a></li>
									<li><a href="{{route('gallery')}}">{{ GALLERY }}</a></li>
									<li><a href="{{route('faq')}}">{{ FAQ }}</a></li>
								</ul>
							</li>
							<li><a href="{{ route('service') }}"> {{ SERVICE }}</a></li>
							<li><a href="{{ route('portfolio') }}"> {{ PORTFOLIO }}</a></li>
							<li><a href="{{ route('testimonial') }}"> {{ TESTIMONIAL }}</a></li>
							<li><a href="{{ route('news') }}"> {{ NEWS }}</a></li>
							<li><a href="{{ route('contact') }}"> {{ CONTACT }}</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
{{-- header pert end  --}}


        @yield('content')



    {{-- footer pert start --}}

    <div class="footer-contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="footer-contact-item">
                        <ul>
                            <li><img src="{{ asset('uploads/footer_icon') }}/{{ $setting_data->footer_address_icon }}" alt="Icon"></li>
                            <li>
                                <h4>{{ ADDRESS }}</h4>
                                <p>{{ $setting_data->footer_address }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="footer-contact-item">
                        <ul>
                            <li><img src="{{ asset('uploads/footer_icon') }}/{{ $setting_data->footer_phone_icon }}" alt="Icon"></li>
                            <li>
                                <h4>{{ CALL_US }}</h4>
                                <p>{{ $setting_data->footer_phone }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="footer-contact-item">
                        <ul>
                            <li><img src="{{ asset('uploads/footer_icon') }}/{{ $setting_data->footer_working_hour_icon }}" alt="Icon"></li>
                            <li>
                                <h4>{{ WORKING_HOURS }}</h4>
                                <p>{{ $setting_data->footer_working_hour }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3 footer-col wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <h3>{{ ABOUT_US }}</h3>
                        <p>{{ $setting_data->footer_about }}</p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 footer-col wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <h3>{{ LATEST_NEWS }}</h3>
                    @foreach ($latest_news as $item)
                        <div class="news-item">
                            <div class="news-title"><a href="{{ url('news') }}/{{ $item->slug }}/{{ $item->id }}">{{ $item->title }}</a></div>
                        </div>
                    @endforeach


                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 footer-col wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <h3>{{ POPULER_NEWS }}</h3>
                    @foreach ($popular_news as $item)
                        <div class="news-item">
                            <div class="news-title"><a href="{{ url('news') }}/{{ $item->slug }}/{{ $item->id }}">{{ $item->title }}</a></div>
                        </div>
                    @endforeach
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 footer-col wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <h3>{{ QUICK_LINKS }}</h3>
                    <div class="news-item">
                        <div class="news-title"><a href="{{ route('front') }}">{{ HOME }}</a></div>
                    </div>
                    <div class="news-item">
                        <div class="news-title"><a href="{{ route('term') }}">{{ TERMS_AND_CONDITION }}</a></div>
                    </div>
                    <div class="news-item">
                        <div class="news-title"><a href="{{ route('privacy') }}">{{ PRIVACY_POLICY }}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyrignt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-text">
                        <p>{{ $setting_data->footer_copyright }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="scroll-top d-block">
        <i class="fa fa-angle-up"></i>
    </div>

    <script src='{{ asset('front/js/jquery-2.2.4.min.js') }}'></script>
    <script src='{{ asset('front/js/bootstrap.min.js') }}'></script>
    <script src='{{ asset('front/js/bootstrap-datepicker.js') }}'></script>
    <script src='{{ asset('front/js/lightbox.min.js') }}'></script>
    <script src='{{ asset('front/js/owl.carousel.min.js') }}'></script>
    <script src='{{ asset('front/js/jquery.meanmenu.js') }}'></script>
    <script src='{{ asset('front/js/jquery.filterizr.min.js') }}'></script>
    <script src='{{ asset('front/js/waypoints.min.js') }}'></script>
    <script src='{{ asset('front/js/jquery.counterup.min.js') }}'></script>
    <script src='{{ asset('front/js/custom.js') }}'></script>


    @if($setting_data->tawk_live_chat_status == 1)
        {!! $setting_data->tawk_live_chat_code !!}
    @endif
    </body>
    </html>
