@extends('front.front_layout')

@section('meta_description')
{{ $page->md_gallery }}
@endsection

@section('meta_title')
{{ $page->mt_gallery }}
@endsection


@section('content')
@include('front.include.sub_banner', [
    'heading' => $page->gallery_heading,
    'img' => $setting->banner_gallery,
])
<div class="caption-photo-area ptb-60" style="margin-top:-20px;">
	<div class="container">
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
@endsection
