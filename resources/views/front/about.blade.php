@extends('front.front_layout')

@section('meta_description')
{{ $page->md_about }}
@endsection

@section('meta_title')
{{ $page->mt_about }}
@endsection


@section('content')

@include('front.include.sub_banner', [
    'heading' => $page->about_heading,
    'img' => $setting->banner_about,
])

<div class="container pt_40 pb_40">
	<div class="row">
		<div class="col-md-12">
			<img src="{{ asset('uploads/about_photo.jpg') }}" alt=""><br>
		</div>

		<div class="col-md-12">
			<h3>{{ $about->about_heading }}</h3>
			<p>{!! clean(nl2br($about->about_content)) !!}</p>
		</div>
	</div>
</div>


<div class="mission-area bg-area pt-30 pb-60">
	<div class="container">
		<div class="row">
		    <div class="col-md-6 col-sm-6">
				<div class="about-mission">
					<div class="mission-icon">
						<i class="fa fa-star"></i>
					</div>
					<h3>{{ $about->mission_heading }}</h3>
					<p>{{ $about->mission_content }}</p>
				</div>
			</div>

		    <div class="col-md-6 col-sm-6">
				<div class="about-mission">
					<div class="mission-icon">
						<i class="fa fa-heart"></i>
					</div>
					<h3>{{ $about->vision_heading }}</h3>
					<p>{{ $about->vision_content }}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
