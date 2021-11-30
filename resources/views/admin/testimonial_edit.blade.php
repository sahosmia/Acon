@extends('admin.admin_layout')

@section('testimonial')
active
@endsection

@section('content')
<div class="section-header">
    <h1>Edit Testimonial</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.testimonial') }}" class="btn btn-primary">View All</a>
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
                        $all_fild = ['name', 'photo', 'designation', 'company', 'comment'];
                    @endphp

                    @foreach ($all_fild as $item)
                        @error($item)
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    @endforeach

                    <form action="{{ route('admin.testimonial_edit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $testimonial->id }}" name="id">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="name" value="{{ $testimonial->name }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Designation</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="designation" value="{{ $testimonial->designation }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Company</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="company" value="{{ $testimonial->company }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                            <div class="col-sm-12 col-md-7">
                                <img class="img_25 img_bg_deep" src="{{ asset('uploads/testimonial') }}/{{ $testimonial->photo }}" alt="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Photo</label>
                            <div class="col-sm-12 col-md-7">
                            <input type="file" class="form-control" name="photo">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Comment</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control h_140" name="comment">{{ $testimonial->comment }}</textarea>
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
