@extends('admin.admin_layout')

@section('title', 'Testimonial | Create')
@section('testimonial', 'active')


@section('content')
<div class="section-header">
    <h1>Add Testimonial</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-primary">View All</a>
    </div>
</div>


<div class="section-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                   @include('include.message')

                    <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Designation</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="designation" value="{{ old('designation') }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Company</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="company" value="{{ old('company') }}">
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
                                <textarea class="form-control h_140" name="comment">{{ old('comment') }}</textarea>
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
