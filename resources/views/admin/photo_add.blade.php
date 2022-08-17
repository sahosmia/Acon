@extends('admin.admin_layout')

@section('title', 'Photo | Create')
@section('photo', 'active')

@section('content')
<div class="section-header">
    <h1>Add Photo </h1>
    <div class="ml-auto">
        <a href="{{ route('admin.photo') }}" class="btn btn-primary">View All</a>
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

                    <form action="{{ route('admin.photo_insert') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Caption</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="caption" value="{{ old('caption') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Photo</label>
                            <div class="col-sm-12 col-md-7">
                              <input type="file" class="form-control" name="photo">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Show on Home?</label>
                            <div class="col-sm-12 col-md-7">
                                <select class="form-control select2" name="status">
                                    <option {{ old('status') == 1 ? "selected" : "" }} value="1">Show</option>
                                    <option {{ old('status') == 2 ? "selected" : "" }} value="2">Hide</option>
                                </select>
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
