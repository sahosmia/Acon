@extends('admin.admin_layout')

@section('title', 'Slider | Create')
@section('slider', 'active')


@section('content')slider
<div class="section-header">
    <h1>Add Slider</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.slider') }}" class="btn btn-primary">View All</a>
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


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif



                    <form action="{{ route('admin.slider_insert') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                            <div class="col-sm-12 col-md-7">
                            <input type="file" class="form-control" name="photo">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Heading</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="heading" value="{{ old('heading') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea type="text" class="form-control h_140" name="content" >{{ old('content') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button1 Text</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="button1_text" value="{{ old('button1_text') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button1 URL</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="button1_url" value="{{ old('button1_url') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button2 Text</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="button2_text" value="{{ old('button2_text') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button2 URL</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="button2_url" value="{{ old('button2_url') }}">
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
