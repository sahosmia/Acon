@extends('front.front_layout')

@section('meta_description')
{{ $page->md_term }}
@endsection

@section('meta_title')
{{ $page->mt_term }}
@endsection


@section('content')
@include('front.include.sub_banner', [
    'heading' => $page->term_heading,
    'img' => $setting->banner_terms,
])

<div class="term-home" style="padding-top:40px;padding-bottom:30px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				{!! clean(nl2br($term->term_content)) !!}
			</div>
		</div>
	</div>
</div>
@endsection
