@extends('front.front_layout')

@section('meta_description')
{{ $page->md_search }}
@endsection

@section('meta_title')
{{ $page->mt_search }}
@endsection


@section('content')
@include('front.include.sub_banner', [
    'heading' => $page->search_heading,
    'img' => $setting->banner_search,
])

<div class="search-home" style="padding-top:40px;padding-bottom:30px;">
	<div class="container">
		<div class="row">
            @forelse ($items as $item)
                <div class="col-md-4 col-sm-4 clear-item">
                    <div class="blog-item common-text">
                        <div class="blog-photo" style="background-image: url({{ asset('uploads/news') }}/{{ $item->photo }})"></div>
                        <div class="blog-author">
                            <ul>
                                <li class="gro">{{ POSTED_ON }} {{ $item->created_at->format('d M, Y') }}</li>
                                <li><i class="fa fa-user-circle-o"></i>{{ $user->find($item->added_by)->role == 1 ? "ADMIN" : "SUPER-ADMIN" }}</li>
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
            @empty
				<span style="color:red;">No Result Found.</span>
            @endforelse
		</div>
	</div>
</div>
@endsection
