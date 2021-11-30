@extends('front.front_layout')

@section('meta_description')
{{ $page->md_portfolio }}
@endsection

@section('meta_title')
{{ $page->mt_portfolio }}
@endsection


@section('content')
@include('front.include.sub_banner', [
    'heading' => $page->portfolio_heading,
    'img' => $setting->banner_portfolio,
])

<div class="recent-works bg-area ptb-60" style="margin-top:-40px;">
	<div class="container">
		<div class="row">
			<div class="recent-menu">
				<ul>
					<li class="hvr-bounce-to-right" data-filter="all">All</li>
					@foreach ($portfolio_categorys as $item)
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
@endsection
