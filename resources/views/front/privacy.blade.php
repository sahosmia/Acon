@extends('front.front_layout')

@section('meta_description')
{{ $page->md_privacy }}
@endsection

@section('meta_title')
{{ $page->mt_privacy }}
@endsection


@section('content')
@include('front.include.sub_banner', [
    'heading' => $page->privacy_heading,
    'img' => $setting->banner_privacy,
])

<div class="privacy-home" style="padding-top:40px;padding-bottom:30px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				{!! clean(nl2br($privacy->privacy_content)) !!}
			</div>
		</div>
	</div>
</div>
@endsection
