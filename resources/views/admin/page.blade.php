@extends('admin.admin_layout')

@section('page')
active
@endsection

@section('content')
<div class="section-header">
    <h1>Page Section</h1>
</div>

<section class="section-body">
    <div class="row">
		<div class="col-md-12">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    <p>{{ session()->get('success') }}</p>
                </div>
            @endif

            @php
                $all_fild = ['mt_home', 'md_home', 'about_photo', 'about_heading', 'about_content', 'mission_heading', 'mission_content', 'vision_heading', 'vision_content', 'mt_about', 'md_about', 'gallery_heading', 'mt_gallery', 'md_gallery', 'faq_heading', 'mt_faq', 'md_faq', 'service_heading', 'mt_service', 'md_service', 'portfolio_heading', 'mt_portfolio', 'md_portfolio', 'testimonial_heading', 'mt_testimonial', 'md_testimonial', 'news_heading', 'mt_news', 'md_news', 'contact_heading', 'mt_contact', 'md_contact', 'search_heading', 'mt_search', 'md_search', 'term_heading', 'term_content', 'mt_term', 'md_term', 'privacy_heading', 'privacy_content', 'mt_privacy', 'md_privacy',];
            @endphp
            @foreach ($all_fild as $item)
                @error($item)
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
                @enderror
            @endforeach
		</div>
	</div>

    <div class="col-12 col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="true">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="faq-tab" data-toggle="tab" href="#faq" role="tab" aria-controls="faq" aria-selected="true">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="service-tab" data-toggle="tab" href="#service" role="tab" aria-controls="service" aria-selected="true">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="portfolio-tab" data-toggle="tab" href="#portfolio" role="tab" aria-controls="portfolio" aria-selected="true">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="testimonial-tab" data-toggle="tab" href="#testimonial" role="tab" aria-controls="testimonial" aria-selected="true">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="true">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="search-tab" data-toggle="tab" href="#search" role="tab" aria-controls="search" aria-selected="true">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="terms-tab" data-toggle="tab" href="#terms" role="tab" aria-controls="terms" aria-selected="true">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="privacy-tab" data-toggle="tab" href="#privacy" role="tab" aria-controls="privacy" aria-selected="true">Privacy</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card-body">
                        <form action="{{route('home_page_update') }}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="mt_home" value="{{ $page->mt_home }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="form-control h_140" name="md_home" >{{ $page->md_home }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <div class="card-body">

                        <h6 class="p-2 seo-info">Photo Section</h6>
                        <form action="{{route('about_page_photo_update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                                <div class="col-sm-12 col-md-7 img_bg">
                                    <img class="img_50" src="{{ asset('uploads') }}/{{ $page->about_photo }}" alt="">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="file" class="form-control" name="about_photo">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>

                        </form>




                        <h6 class="p-2 seo-info">Other Information Section</h6>
                        <form action="{{route('about_page_information_update') }}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">About Heading</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="about_heading" value="{{ $page->about_heading }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">About Content</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="summernote" name="about_content" >{{ $page->about_content }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mission Heading</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="mission_heading" value="{{ $page->mission_heading }}">
                                </div>
                            </div>



                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mission Content</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="form-control h_140" name="mission_content" >{{ $page->mission_content }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Vision Heading</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="vision_heading" value="{{ $page->vision_heading }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Vision Content</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="form-control h_140" name="vision_content" >{{ $page->vision_content }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="mt_about" value="{{ $page->mt_about }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="form-control h_140" name="md_about" >{{ $page->md_about }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
                    <div class="card-body">
                        <form action="{{route('gallery_page_update') }}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gallery Heading</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="gallery_heading" value="{{ $page->gallery_heading }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="mt_gallery" value="{{ $page->mt_gallery }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="form-control h_140" name="md_gallery" >{{ $page->md_gallery }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                    <div class="card-body">
                        <form action="{{route('faq_page_update') }}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Faq Heading</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="faq_heading" value="{{ $page->faq_heading }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="mt_faq" value="{{ $page->mt_faq }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="form-control h_140" name="md_faq" >{{ $page->md_faq }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab">
                    <div class="card-body">
                        <form action="{{route('service_page_update') }}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Service Heading</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="service_heading" value="{{ $page->service_heading }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="mt_service" value="{{ $page->mt_service }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="form-control h_140" name="md_service" >{{ $page->md_service }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">
                    <div class="card-body">
                        <form action="{{route('portfolio_page_update') }}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Portfolio Heading</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="portfolio_heading" value="{{ $page->portfolio_heading }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="mt_portfolio" value="{{ $page->mt_portfolio }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="form-control h_140" name="md_portfolio" >{{ $page->md_portfolio }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="testimonial" role="tabpanel" aria-labelledby="testimonial-tab">
                    <div class="card-body">
                        <form action="{{route('testimonial_page_update') }}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Testimonial Heading</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="testimonial_heading" value="{{ $page->testimonial_heading }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="mt_testimonial" value="{{ $page->mt_testimonial }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="form-control h_140" name="md_testimonial" >{{ $page->md_testimonial }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="news-tab">
                    <div class="card-body">
                        <form action="{{route('news_page_update') }}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">News Heading</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="news_heading" value="{{ $page->news_heading }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="mt_news" value="{{ $page->mt_news }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="form-control h_140" name="md_news" >{{ $page->md_news }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="card-body">
                        <form action="{{route('contact_page_update') }}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contact Heading</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="contact_heading" value="{{ $page->contact_heading }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="mt_contact" value="{{ $page->mt_contact }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="form-control h_140" name="md_contact" >{{ $page->md_contact }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">
                    <div class="card-body">
                        <form action="{{route('search_page_update') }}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Search Heading</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="search_heading" value="{{ $page->search_heading }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="mt_search" value="{{ $page->mt_search }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="form-control h_140" name="md_search" >{{ $page->md_search }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="terms" role="tabpanel" aria-labelledby="terms-tab">
                    <div class="card-body">
                        <form action="{{route('term_page_update') }}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Terms & Condition Heading</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="term_heading" value="{{ $page->term_heading }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Term & Condition Content</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="summernote" name="term_content" >{{ $page->term_content }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="mt_term" value="{{ $page->mt_term }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="form-control h_140" name="md_term" >{{ $page->md_term }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="privacy" role="tabpanel" aria-labelledby="privacy-tab">
                    <div class="card-body">
                        <form action="{{route('privacy_page_update') }}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Privacy Policy Heading</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="privacy_heading" value="{{ $page->privacy_heading }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Privacy Policy Content</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="summernote" name="privacy_content" >{{ $page->privacy_content }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                                <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="mt_privacyterm" value="{{ $page->mt_privacyterm }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                                <div class="col-sm-12 col-md-7">
                                  <textarea type="text" class="form-control h_140" name="md_privacyterm" >{{ $page->md_privacyterm }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>




                </div>
            </div>
        </div>
    </div>
</section>















@endsection
