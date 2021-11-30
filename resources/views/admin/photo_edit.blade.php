@extends('admin.admin_layout')

@section('photo')
active
@endsection

@section('content')
<div class="section-header">
    <h1>Edit Photos </h1>
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

                    @php
                        $all_fild = ['caption', 'photo', 'status'];
                    @endphp

                    @foreach ($all_fild as $item)
                        @error($item)
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    @endforeach

                    <form action="{{ route('admin.photo_edit') }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $photo->id }}">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Caption</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="caption" value="{{ $photo->caption }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                            <div class="col-sm-12 col-md-7">
                                <img class="existing-photo img_25" src="{{ asset('uploads/gallery') }}/{{ $photo->photo }}" alt="">
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
                                    <option {{ $photo->status == 1 ? "selected" : "" }} value="1">Show</option>
                                    <option {{ $photo->status == 2 ? "selected" : "" }} value="2">Hide</option>
                                </select>
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
