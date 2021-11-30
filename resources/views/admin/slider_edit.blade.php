@extends('admin.admin_layout')

@section('slider')
active
@endsection

@section('content')
<div class="section-header">
    <h1>Edit Slider</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.slider') }}" class="btn btn-primary">View All</a>
    </div>
</div>
{{--
<div class="col-md-12">
    <div class="card">
        <div class="card-body">

            @if(session()->has('success'))
                <div class="alert alert-success">
                    <p>{{ session()->get('success') }}</p>
                </div>
            @endif

            @php
                $all_fild = ['photo', 'heading', 'content', 'button1_text', 'button1_url', 'button2_text', 'button2_url'];
            @endphp

            @foreach ($all_fild as $item)
                @error($item)
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
                @enderror
            @endforeach

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
                        <button class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>



        </div>
    </div>
</div> --}}

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
                        $all_fild = ['photo', 'heading', 'content', 'button1_text', 'button1_url', 'button2_text', 'button2_url'];
                    @endphp

                    @foreach ($all_fild as $item)
                        @error($item)
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    @endforeach

                    <form action="{{ route('admin.slider_edit') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $slider->id }}">


                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_300" src="{{ asset('uploads/slider') }}/{{ $slider->photo }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="photo">
                        </div>
                    </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Heading</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="heading" value="{{ $slider->heading }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea type="text" class="form-control h_140" name="content" >{{ $slider->content }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button1 Text</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="button1_text" value="{{ $slider->button1_text }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button1 URL</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="button1_url" value="{{ $slider->button1_url }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button2 Text</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="button2_text" value="{{ $slider->button2_text }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button2 URL</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="button2_url" value="{{ $slider->button2_url }}">
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
