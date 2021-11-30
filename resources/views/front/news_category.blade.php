@extends('front.front_layout')

@section('meta_description')
{{ $news_categorys->meta_description }}
@endsection

@section('meta_title')
{{ $news_categorys->meta_title }}
@endsection

@section('content')
@include('front.include.sub_banner', [
    'heading' => $news_categorys->name,
    'img' => $setting_data->banner_news,
])

<div class="blog-area bg-area pt_30 pb_60 blog-clear">
	<div class="container">
		<div class="row">

            @foreach ($newss as $item)

				<div class="col-md-4 col-sm-4 clear-item">
					<div class="blog-item common-text">
                        <div class="blog-photo" style="background-image: url({{ asset('uploads/news') }}/{{ $item->photo }})"></div>
                        <div class="blog-author">
                            <ul>
                                <li class="gro">{{ POSTED_ON }} {{ $item->created_at->format('d M, Y') }}</li>
                                <li><i class="fa fa-user-circle-o"></i>{{ ADMIN }}</li>
                            </ul>
                        </div>
                        <div class="blog-text">
                            <h3><a href="{{ url('news') }}/{{ $item->slug }}/{{ $item->id }}">{{ $item->title }}</a></h3>
                            {{ $item->short_content }}
                            <div class="services-link">
                                <a href="{{ url('news') }}/{{ $item->slug }}/{{ $item->id }}">{{ READ_MORE }}<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
					</div>
				</div>
            @endforeach
		</div>
	</div>
</div>
@endsection
