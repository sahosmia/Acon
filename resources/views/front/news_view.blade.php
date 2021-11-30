@extends('front.front_layout')

@section('meta_description')
{{ $news->meta_description }}
@endsection

@section('meta_title')
{{ $news->meta_title }}
@endsection


@section('content')
@include('front.include.sub_banner', [
    'heading' => $news->title,
    'img' => $news->banner,
])


<div class="single-news-area pt_30 pb_60 common-text">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="single-news-item">
					<div class="single-news-photo">
						<img src="{{ asset('uploads/news') }}/{{ $news->photo }}" class="img-responsive" alt="">
					</div>
					<div class="single-news-text">
						<div class="single-blog-author mb_20">
							<ul>
								<li class="gro"><i class="fa fa-calendar"></i>{{ $news->created_at->format('d M, Y') }}</li>
								<li class="" style="margin-left: -10px;"><i class="fa fa-user-circle-o"></i>{{ ADMIN }}</li>
							</ul>
						</div>
						<p>
							{!! clean(nl2br($news->content)) !!}
						</p>
						<h3>{{ SHARE_THIS }}</h3>

                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_twitter"></a>
                                <a class="a2a_button_google_plus"></a>
                                <a class="a2a_button_pinterest"></a>
                                <a class="a2a_button_linkedin"></a>
                                <a class="a2a_button_digg"></a>
                                <a class="a2a_button_tumblr"></a>
                                <a class="a2a_button_reddit"></a>
                                <a class="a2a_button_stumbleupon"></a>
                            </div>
                            <script async src="https://static.addtoany.com/menu/page.js"></script>

						@if($news->comment == 1)
						<h3>{{ COMMENTS }}</h3>
						<div class="fb-comments" data-href="link" data-numposts="5"></div>
						@endif

					</div>
				</div>
			</div>


			<div class="col-md-4">
				<div class="sidebar">
					<div class="sidebar-item">
						<div class="sidebar-item searchbar-item">
                            <form action="{{ route('search') }}" method="POST" class="search">
                            @csrf
								<div class="input-group">
                                    <input type="text" name="search_string" class="form-control" autocomplete="off" placeholder="{{ SEARCH_NEWS }}">
									<span class="input-group-btn">
                                        <button name="form" class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							  		</span>
								</div>
                            </form>
                        </div>
					</div>

				    <div class="sidebar-item">
						<h3>{{ CATEGORY }}</h3>
						<ul>
							@foreach ($news_categorys as $item)
								<li><a href="{{ url('category/view') }}/{{ $item->slug }}/{{ $item->id }}">{{ $item->name }}</a></li>
							@endforeach
						</ul>
					</div>

					<div class="sidebar-item">
						<h3>{{ LATEST_NEWS }}</h3>
						<ul>
							@foreach ($news_latest as $item)
								<li><a href="{{ url('news') }}/{{ $item->slug }}/{{ $item->id }}">{{ $item->title }}</a></li>
							@endforeach
						</ul>
					</div>


					<div class="sidebar-item">
						<h3>{{ POPULER_NEWS }}</h3>
						<ul>
							@foreach ($news_populer as $item)
								<li><a href="{{ url('news') }}/{{ $item->slug }}/{{ $item->id }}">{{ $item->title }}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
