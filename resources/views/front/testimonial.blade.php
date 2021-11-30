@extends('front.front_layout')

@section('meta_description')
{{ $page->md_testimonial }}
@endsection

@section('meta_title')
{{ $page->mt_testimonial }}
@endsection


@section('content')
@include('front.include.sub_banner', [
    'heading' => $page->testimonial_heading,
    'img' => $setting->banner_testimonial,
])

<div class="testimonial-area main-testimonial ptb-60">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="testimonial-carousel owl-carousel owl-loaded owl-drag">
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
@endsection
