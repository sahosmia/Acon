@extends('front.front_layout')

@section('meta_description')
{{ $page->meta_description }}
@endsection

@section('meta_title')
{{ $page->meta_title }}
@endsection



@section('content')
@include('front.include.sub_banner', [
    'heading' => $page->news_heading,
    'img' => $setting->banner_news,
])


<div class="single-news-area pt_30 pb_60 common-text">
	<div class="container">
		<div class="row">
            @foreach ($news as $item)

            <div class="col-md-4 col-sm-4 clear-item">
                <div class="blog-item common-text">
                    <div class="blog-photo" style="background-image: url({{ asset('uploads/news') }}/{{ $item->photo }})"></div>
                    <div class="blog-author ">
                        <ul>
                            <li class="gro">{{ POSTED_ON }} {{ $item->created_at->format('d M, Y') }}</li>
                            <li><i class="fa fa-user-circle-o"></i>{{ ADMIN }}</li>
                        </ul>
                    </div>
                    <div class="blog-text">
                        <h3>
                            <a href="{{ url('news') }}/{{ $item->slug }}/{{ $item->id }}">{{ $item->title }}</a>
                        </h3>
                        <p>
                            {{ $item->short_content }}
                        </p>
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
