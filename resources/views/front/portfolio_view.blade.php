@extends('front.front_layout')

@section('meta_description')
{{ $portfolio->meta_description }}
@endsection

@section('meta_title')
{{ $portfolio->meta_title }}
@endsection


@section('content')
@include('front.include.sub_banner', [
    'heading' => $portfolio->name,
    'img' => $portfolio->banner,
])

<div class="single-service-area pt_30 pb_60">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8">
				<div class="carousel slide" data-ride="carousel" id="quote-carousel">
					@php
					$j=0;
                    @endphp
					<div class="carousel-inner">
						<div class="item active" style="background-image: url({{ asset('uploads/portfolio') }}/{{ $portfolio->photo }})">
							<div class="lightbox-inner">
								<a href="{{ asset('uploads/portfolio') }}/{{ $portfolio->photo }}" data-lightbox="lightbox-item"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>
                        @foreach ($portfolio_photos as $item)

							<div class="item" style="background-image: url({{ asset('uploads/portfolio_photos') }}/{{ $item->photo }})">
								<div class="lightbox-inner">
									<a href="{{ asset('uploads/portfolio_photos') }}/{{ $item->photo }}" data-lightbox="lightbox-item"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						@endforeach
					</div>
                    @if ($portfolio_photo_total>= 1)
					<ul class="carousel-indicators single-carousel owl-carousel">
						<li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive" src="{{ asset('uploads/portfolio') }}/{{ $portfolio->photo }}" alt=""></li>
                        @foreach ($portfolio_photos as $item)
                            @php
                                $j++;
                            @endphp
							<li data-target="#quote-carousel" data-slide-to="{{ $j }}"><img class="img-responsive" src="{{ asset('uploads/portfolio_photos') }}/{{ $item->photo }}" alt=""></li>
                        @endforeach
					</ul>
                    @endif
                </div>

				<div class="single-portfolio-text recent-single-text pt_30">
					<h4>{{ DESCRIPTION }}</h4>
					<p>
						{!! clean(nl2br($portfolio->content)) !!}
					</p>
				</div>

				<div class="single-portfolio-text recent-single-text pt_10">
					<div class="table-responsive">
						<table class="table table-bordered project-desc">
							<tr>
								<td><h4>{{ CLIENT_NAME }}</h4></td>
								<td>{{ $portfolio->client_name }}</td>
							</tr>
							<tr>
								<td><h4>{{ CLIENT_COMPANY }}</h4></td>
								<td>{{ $portfolio->client_company }}</td>
							</tr>
							<tr>
								<td><h4>{{ PROJECT_START_DATE }}</h4></td>
								<td>{{ $portfolio->start_date }}</td>
							</tr>
							<tr>
								<td><h4>{{ PROJECT_END_DATE }}</h4></td>
								<td>{{ $portfolio->end_date }}</td>
							</tr>
							<tr>
								<td><h4>{{ PROJECT_COST }}</h4></td>
								<td>${{ $portfolio->cost }}</td>
							</tr>
							<tr>
								<td><h4>{{ PROJECT_WEBSITE }}</h4></td>
								<td>{{ $portfolio->website }}</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="single-portfolio-text recent-single-text">
					<h4>{{ CLIENT_COMMENT }}</h4>
					<div class="client-comment">
						{{ $portfolio->client_comment }}
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-4">
				<div class="sidebar">
					<div class="sidebar-item category">
						<h3>{{ PROJECTS }}</h3>
						<ul>
							@foreach ($portfolios as $item)
                                <li><a href="{{ url('portfolio') }}/{{ $item->slug }}/{{ $item->id }}">{{ $item->name }}</a></li>
                            @endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
