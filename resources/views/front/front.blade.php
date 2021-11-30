@extends('front.front_layout')

@section('meta_description')
{{ $page->md_home }}
@endsection

@section('meta_title')
{{ $page->mt_home }}
@endsection


@section('content')

<!-- slider pert start  -->
<div class="slider">
	<div class="slide-carousel owl-carousel">
		@foreach ($sliders as $item)
			<div class="slider-item" style="background-image:url({{ asset('uploads/slider') }}/{{ $item->photo }});">
				<div class="bg"></div>
				<div class="slider-table">
					<div class="slider-text">
						<div class="slider-animated">
							<h2>{{ $item->heading }}</h2>
						</div>
						<div class="slider-animated">
							<p>{{ $item->content }}</p>
						</div>
						<div class="slider-animated">
							<ul>
								<li><a href="{{ $item->button1_url }}">{{ $item->button1_text }}</a></li>
								<li><a href="{{ $item->button2_url }}">{{ $item->button2_text }}</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
         @endforeach
	</div>
</div>
<!-- slider pert end  -->



<!-- why choose status start -->
@if ($setting->why_choose_status == 1)
<div class="choose-area pt-60">
	<div class="headline">
		<div class="headline-shadow">
			<h2>{{ $setting->why_choose_title }}</h2>
			<p>{{ $setting->why_choose_subtitle }}</p>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row choose-item-row">
			<div class="col-md-6 choose-left" style="background-image: url({{ asset('uploads') }}/{{ $setting_data->why_choose_item_bg }});">
			</div>
			<div class="col-md-6 choose-right" style="background-image: url({{ asset('uploads') }}/{{ $setting_data->why_choose_main_photo }});">
				<div class="bg-choose"></div>
				<div class="choose-item">
					<ul>
						@foreach ($why_chooses as $item)
							<li>
								<div class="choose-icon">
									<img src="{{ asset('uploads/why_choose') }}/{{ $item->photo }}" alt="{{ $item->photo }}">
								</div>
								<div class="choose-text">
									<h3>{{ $item->heading }}</h3>
									<p>{{ $item->content }}</p>
								</div>
							</li>
                        @endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endif
<!-- why choose status end -->


<!-- service start  -->
@if ($setting->service_status == 1)
<div class="services-area ptb-60">
	<div class="container">
		<div class="row">
			<div class="headline">
				<div class="headline-shadow">
					<h2>{{ $setting->service_title }}</h2>
					<p>{{ $setting->service_subtitle }}</p>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach ($services as $item)
				<div class="col-md-4 col-sm-6 col-xs-12 clear-three">
					<div class="services-item">
						<div class="services-photo" style="background-image: url({{ asset('uploads/service') }}/{{  $item->photo }})"></div>
						<div class="services-text">
							<h3><a href="{{ url('service') }}/{{ $item->slug }}/{{ $item->id }}">{{ $item->heading }}</a></h3>
                            {{ $item->short_content }}
							<div class="services-link">
								<a href="{{ url('service') }}/{{ $item->slug }}/{{ $item->id }}">{{ READ_MORE }}<i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
				</div>


            @endforeach
		</div>
	</div>
</div>
@endif
<!-- service end  -->


<!-- protfolio start  -->
@if ($setting->portfolio_status == 1)
<div class="recent-works bg-area ptb-60">
	<div class="container">
		<div class="row">
			<div class="headline">
				<div class="headline-shadow">
					<h2>{{ $setting->portfolio_title }}</h2>
					<p>{{ $setting->portfolio_subtitle }}</p>
				</div>
			</div>
			<div class="recent-menu">
				<ul>
					<li class="hvr-bounce-to-right" data-filter="all">{{ ALL }}</li>
					@foreach ($protfolio_categorys as $item)
                        <li class="hvr-bounce-to-right" data-filter="{{ $item->id }}">{{ $item->name }}</li>
                    @endforeach
				</ul>
			</div>
			<div class="filtr-container">

                @foreach ($portfolios as $item)
					<div class="col-md-4 col-sm-6 col-xs-12 filtr-item clear-three" data-category="{{ $item->category_id }}" data-sort="value">
						<div class="recent-item">
							<div class="lightbox-item">
								<div class="recent-photo" style="background-image: url({{ asset('uploads/portfolio') }}/{{ $item->photo }})">
									<div class="lightbox-bg"></div>
									<div class="lightbox-text">
										<div class="lightbox-table">
											<div class="lightbox-icon">
												<a href="{{ asset('uploads/portfolio') }}/{{ $item->photo }}" data-lightbox="lightbox-item"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="recent-text">
									<h3>{{ $item->name }}</h3>
                                    {{ $item->short_content }}
                                    <div class="services-link">
										<a href="{{ url('portfolio') }}/{{ $item->slug }}/{{ $item->id }}">{{ READ_MORE }}<i class="fa fa-angle-double-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

                @endforeach

			</div>
		</div>
	</div>
</div>
@endif
<!-- protfolio end -->


<!-- team start  -->
@if ($setting->team_status == 1)
<div class="team-area ptb-60">
	<div class="container">
		<div class="row">
			<div class="headline">
				<div class="headline-shadow">
					<h2>{{ $setting->team_title }}</h2>
					<p>{{ $setting->team_subtitle }}</p>
				</div>
			</div>
			<div class="col-md-12">
				<div class="team-carousel owl-carousel">

                    @foreach ($teams as $item)
                        <div class="team-item">
                            <div class="team-photo" style="background-image: url({{ asset('uploads/team') }}/{{ $item->photo }})"></div>
                            <div class="team-text">
                                <h4>{{ $item->name }}</h4>
                                <p>{{ $designation->find($item->designation_id)->designation_name }}</p>
                            </div>
                            <div class="team-social">
                                <ul>
                                    <!-- if isset facebook -->
                                    @if (isset($item->facebook))
                                    <li><a href="{{ $item->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    @endif

                                    @if (isset($item->twitter))
                                    <li><a href="{{ $item->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    @endif

                                    @if (isset($item->linkedin))
                                    <li><a href="{{ $item->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    @endif

                                    @if (isset($item->youtube))
                                    <li><a href="{{ $item->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                    @endif

                                    @if (isset($item->google_plus))
                                    <li><a href="{{ $item->google_plus }}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    @endif

                                    @if (isset($item->instagram))
                                    <li><a href="{{ $item->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    @endif

                                    @if (isset($item->flickr))
                                    <li><a href="{{ $item->flickr }}" target="_blank"><i class="fa fa-flickr"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- team end -->


<!-- testimonial start  -->
@if ($setting->testimonial_status == 1)
<div class="testimonial-area ptb-60" style="background-image: url({{ asset('uploads') }}/{{ $setting_data->testimonial_main_photo }});">
	<div class="bg-testimonial"></div>
	<div class="container">
		<div class="row">
			<div class="testimonial-headline">
				<h2>{{ $setting->testimonial_title }}</h2>
				<p>{{ $setting->testimonial_subtitle }}</p>
			</div>
			<div class="col-md-12">
				<div class="testimonial-carousel owl-carousel">
					@foreach ($testimonials as $item)
						<div class="testimonial-item">
							<div class="testimonial-text">
								<div class="client-name">
									<h4>{{ $item->name }}</h4>
									<span>{{ $item->designation }}, {{ $item->company }}</span>
								</div>
								<div class="testimonial-detail">
								<i class="fa fa-quote-left"></i>
									<p>{{ $item->comment }}</p>
								</div>
							</div>
							<div class="testimonial-photo">
								<img src="{{ asset('uploads/testimonial') }}/{{ $item->photo }}">
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endif
<!-- testimonial end -->

<!-- faq question  -->
@if ($setting->faq_status == 1)
<div class="faq-home pt-30">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="faq-gallery-main">

					<img src="{{ asset('uploads') }}/{{ $setting->faq_main_photo }}" alt="FAQ Main Photo" class="img-responsive">
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="faq-gallery">
					<h3>{{ $setting->faq_title }}</h3>
					<h4 class="sub">{{ $setting->faq_subtitle }}</h4>
					<div class="panel-group" id="accordion">

						@foreach ($faqs as $key => $item)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#{{ $item->id }}">{{ $item->title }}</a>
									</h4>
								</div>
								<div id="{{ $item->id }}" class="panel-collapse collapse {{ $key == 0 ? "in" : "" }}">
									<div class="panel-body">
                                        {!! clean(nl2br($item->content)) !!}
                                    </div>
								</div>
							</div>

                        @endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endif
<!-- faq question end -->


<!-- counter  -->
@if ($setting->counter_status == 1)
<div class="counterup-area pt-30 pb-60" style="background-image: url({{ asset('uploads/counter_bg.jpg') }})">
	<div class="bg-counterup"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 counter-border">
				<div class="counter-item">
					<h2 class="counter">{{ $setting->counter1_value }}</h2>
					<h4>{{ $setting->counter1_text }}</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 counter-border">
				<div class="counter-item">
					<h2 class="counter">{{ $setting->counter2_value }}</h2>
					<h4>{{ $setting->counter2_text }}</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 counter-border">
				<div class="counter-item">
					<h2 class="counter">{{ $setting->counter3_value }}</h2>
					<h4>{{ $setting->counter3_text }}</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 counter-border">
				<div class="counter-item">
					<h2 class="counter">{{ $setting->counter4_value }}</h2>
					<h4>{{ $setting->counter4_text }}</h4>
				</div>
			</div>

		</div>
	</div>
</div>
@endif
<!-- counter end -->


<!-- photo gallary  -->
@if ($setting->gallery_status == 1)
<div class="caption-photo-area ptb-60">
	<div class="container">
		<div class="row">
			<div class="headline">
				<div class="headline-shadow">
					<h2>{{ $setting->gallery_title }}</h2>
					<p>{{ $setting->gallery_subtitle }}</p>
				</div>
			</div>
		</div>
		<div class="row">

			@foreach ($photos as $item)
				<div class="col-md-3 col-sm-4 col-xs-12 clear-four">
					<div class="caption-item">
						<div class="caption-photo" style="background-image: url({{ asset('uploads/gallery') }}/{{ $item->photo }})">
							<div class="caption-bg"></div>
							<div class="caption-box">
								<div class="caption-table">
									<div class="caption-icon">
										<a href="{{ asset('uploads/gallery') }}/{{ $item->photo }}" data-lightbox="lightbox-item"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="caption-text">
							<p>{{ $item->caption }}</p>
						</div>
					</div>
				</div>
            @endforeach
		</div>
	</div>
</div>
@endif
<!-- photo gallary end -->


<!-- recent post -->
@if ($setting->recent_post_status == 1)
<div class="blog-area bg-area ptb-60">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="headline">
					<div class="headline-shadow">
						<h2>{{ $setting->recent_post_title }}</h2>
						<p>{{ $setting->recent_post_subtitle }}</p>
					</div>
				</div>
				<div class="blog-carousel owl-carousel">

					@foreach ($news as $item)

						<div class="blog-item">
							<div class="blog-photo" style="background-image: url({{ asset('uploads/news') }}/{{ $item->photo }})"></div>
							<div class="blog-author">
								<ul>
									<li class="gro">{{ POSTED_ON }} {{ $item->created_at->format('d M, Y') }}</li>
									<li><i class="fa fa-user-circle-o"></i>{{ ADMIN }}</li>
								</ul>
							</div>
							<div class="blog-text">
								<h3><a href="{{ url('news') }}/{{ $item->slug }}/{{ $item->id }}">{{ $item->title }}</a></h3>
                                {{ $item->short_content }}
                                <div class="services-link">
									<a href="{{ url('news') }}/{{ $item->slug }}/{{ $item->id }}">{{ READ_MORE }}<i class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endif
<!-- recent post end -->


<!-- partner start  -->
@if ($setting->partner_status == 1)
<div class="brand-area ptb-60">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="headline">
					<div class="headline-shadow">
						<h2>{{ $setting->partner_title }}</h2>
						<p>{{ $setting->partner_subtitle }}</p>
					</div>
				</div>
				<div class="brand-carousel owl-carousel">
                    @foreach ($partners as $item)
						<div class="brand-item" style="background-image: url({{ asset('uploads/partner') }}/{{ $item->photo }})"></div>
                    @endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endif
<!-- partner end  -->


@endsection
