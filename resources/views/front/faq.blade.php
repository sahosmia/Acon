@extends('front.front_layout')

@section('meta_description')
{{ $page->md_faq }}
@endsection

@section('meta_title')
{{ $page->mt_faq }}
@endsection


@section('content')
@include('front.include.sub_banner', [
    'heading' => $page->faq_heading,
    'img' => $setting->banner_faq,
])


<div class="faq-home pb-30 pt-10">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="faq-gallery">
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
@endsection
