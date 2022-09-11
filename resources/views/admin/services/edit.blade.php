@extends('admin.admin_layout')

@section('title', 'Service | Update')
@section('service', 'active')

@section('content')
<div class="section-header">
    <h1>Edit Service </h1>
    <div class="ml-auto">
        <a href="{{ route('admin.service') }}" class="btn btn-primary">View All</a>
    </div>
</div>


<div class="section-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    @include('include.message')


                    <form action="{{ route('admin.service_edit') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $service->id }}">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Heading</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="heading" value="{{ $service->heading }}">
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Short Content</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea type="text" class="form-control h_140" name="short_content" >{{ $service->short_content }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="summernote" name="content">{{ $service->content }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                            <div class="col-sm-12 col-md-7 img_bg">
                                <img class="existing-photo img_300" src="{{ asset('uploads/service') }}/{{ $service->photo }}" alt="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Photo</label>
                            <div class="col-sm-12 col-md-7">
                            <input type="file" class="form-control" name="photo">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                            <div class="col-sm-12 col-md-7 img_bg">
                                <img class="existing-photo img_300" src="{{ asset('uploads/banner') }}/{{ $service->banner }}" alt="">
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
                                <input type="text" class="form-control" name="meta_title" value="{{ $service->meta_title }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control h_140" name="meta_description">{{ $service->meta_description }}</textarea>
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
@endsection
