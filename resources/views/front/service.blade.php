@extends('front.front_layout')

@section('meta_description')
{{ $page->md_service }}
@endsection

@section('meta_title')
{{ $page->mt_service }}
@endsection

@section('content')
@include('front.include.sub_banner', [
    'heading' => $page->service_heading,
    'img' => $setting->banner_service,
])


<div class="services-area pt_10 pb_40">
	<div class="container">
		<div class="row">
			@foreach ($services as $item)
				<div class="col-md-4 col-sm-6 col-xs-12 clear-three">
					<div class="services-item">
						<div class="services-photo" style="background-image: url({{ asset('uploads/service') }}/{{ $item->photo }})"></div>
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
@endsection
