@extends('front.front_layout')

@section('meta_description')
{{ $service->meta_description }}
@endsection

@section('meta_title')
{{ $service->meta_title }}
@endsection


@section('content')
@include('front.include.sub_banner', [
    'heading' => $service->heading,
    'img' => $service->banner,
])


<div class="single-service-area pt_30 pb_60">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8">

				<div class="service-main-photo">
					<img src="{{ asset('uploads/service') }}/{{ $service->photo }}" alt="service photo">
				</div>

				<div class="single-service-text recent-single-text pt_30">
					<p>
						{!! clean(nl2br($service->content)) !!}
					</p>
				</div>

			</div>


			<div class="col-lg-3 col-md-4">
				<div class="sidebar">
					<div class="sidebar-item category">
						<h3>{{ SERVICES }}</h3>
						<ul>
							@foreach ($services as $item)
								<li><a href="{{ url('service') }}/{{ $item->slug }}/{{ $item->id }}">{{ $item->heading }}</a></li>
                            @endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
