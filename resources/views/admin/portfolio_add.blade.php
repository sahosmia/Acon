@extends('admin.admin_layout')

@section('portfolio-drop')
active
@endsection

@section('portfolio')
active
@endsection

@section('content')
<div class="section-header">
    <h1>Add Portfolio</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.portfolio') }}" class="btn btn-primary">View All</a>
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
                        $all_fild = ['photo', 'banner', 'name', 'short_content', 'content', 'client_name', 'client_company', 'start_date', 'end_date', 'website', 'cost', 'client_comment', 'category_id', 'meta_title', 'meta_description'];
                    @endphp

                    @foreach ($all_fild as $item)
                        @error($item)
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    @endforeach

                    <form action="{{ route('admin.portfolio_insert') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Short Content</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control h_140" name="short_content">{{ old('short_content') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="summernote" name="content">{{ old('content') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Client Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="client_name" value="{{ old('client_name') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Client Company</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="client_company" value="{{ old('client_company') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Start Date</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control datepicker" name="start_date" value="{{ old('start_date') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">End Date</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control datepicker" name="end_date" value="{{ old('end_date') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Website</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="website" value="{{ old('website') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cost</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="cost" value="{{ old('cost') }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Client Comment</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control h_280" name="client_comment">{{ old('client_comment') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select Portfolio Category</label>
                            <div class="col-sm-12 col-md-7">
                                <select class="form-control select2" name="category_id">
                                    <option value="">Select a Portfolio Category</option>
                                     @foreach ($categorys as $item)
                                    <option {{ old('category_id') == $item->id ? "selected" : "" }} value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <h6 class="p-2 seo-info">Featured Photo</h6>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Featured Photo</label>
                            <div class="col-sm-12 col-md-7">
                              <input type="file" class="form-control" name="photo">
                            </div>
                        </div>

                        <h6 class="p-2 seo-info">Other Photos</h6>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Other Photos</label>
                            <div class="col-sm-12 col-md-7">
                              <input type="file" class="form-control" name="photos[]" multiple>
                            </div>
                        </div>

                        <h6 class="p-2 seo-info">Banner Photos</h6>

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
                                <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control h_140" name="meta_description">{{ old('meta_description') }}</textarea>
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
