@extends('admin.admin_layout')

@section('news-drop')
active
@endsection

@section('news')
active
@endsection

@section('content')
<div class="section-header">
    <h1>Edit News</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.news') }}" class="btn btn-primary">View All</a>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            <p>{{ session()->get('success') }}</p>
                        </div>
                    @endif

                    @php
                        $all_fild = ['photo', 'banner', 'title', 'short_content', 'content', 'comment', 'category_id', 'meta_title', 'meta_description'];
                    @endphp

                    @foreach ($all_fild as $item)
                        @error($item)
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    @endforeach

                    <form action="{{ route('admin.news_edit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <input type="hidden" name="id" value="{{ $news->id }}">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="title" value="{{ $news->title }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="slug" value="{{ $news->slug }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Short Content</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control h_140" name="short_content">{{ $news->short_content }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="summernote" name="content">{{ $news->content }}</textarea>
                            </div>
                        </div>




                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select Category</label>
                            <div class="col-sm-12 col-md-7">
                                <select class="form-control select2" name="category_id">
                                    <option value="">Select a News Category</option>
                                    @foreach ($category as $item)
                                    <option {{ $news->category_id == $item->id ? "selected" : "" }} value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Comment</label>
                            <div class="col-sm-12 col-md-7">
                                <select class="form-control select2" name="comment">
                                    <option {{ $news->comment == 1 ? "selected" : "" }} value="1">On</option>
									<option {{ $news->comment == 2 ? "selected" : "" }} value="2">Off</option>
                                </select>
                            </div>
                        </div>


                        <h6 class="p-2 seo-info">Photo and Banner</h6>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                            <div class="col-sm-12 col-md-7">
                                <img class="img_25" src="{{ asset('uploads/news') }}/{{ $news->photo }}" alt="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Featured Photo</label>
                            <div class="col-sm-12 col-md-7">
                              <input type="file" class="form-control" name="photo">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                            <div class="col-sm-12 col-md-7">
                                <img class="img_50" src="{{ asset('uploads/banner') }}/{{ $news->banner }}" alt="">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Banner</label>
                            <div class="col-sm-12 col-md-7">
                              <input type="file" class="form-control" name="banner">
                            </div>
                        </div>

                        <h6 class="p-2 seo-info">SEO Information</h6>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="meta_title" value="{{ $news->meta_title }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control h_140" name="meta_description">{{ $news->meta_description }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
