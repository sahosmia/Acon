@extends('admin.admin_layout')

@section('team-drop')
active
@endsection

@section('team')
active
@endsection

@section('content')
<div class="section-header">
    <h1>Edit Team</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.team') }}" class="btn btn-primary">View All</a>
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
                       $all_fild = ['name', 'photo', 'designation_id', 'facebook', 'twitter', 'linkedin', 'youtube', 'google_plus', 'instagram', 'flickr'];
                    @endphp

                    @foreach ($all_fild as $item)
                        @error($item)
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    @endforeach

                    <form action="{{ route('admin.team_edit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <input type="hidden" value="{{ $team->id }}" name="id">

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="name" value="{{ $team->name }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select Designation</label>
                            <div class="col-sm-12 col-md-7">
                                <select class="form-control select2" name="designation_id">
                                    <option value="">Select a designation</option>
                                    @foreach ($designations as $item)
                                    <option {{ $team->designation_id == $item->id ? "selected" : "" }} value="{{ $item->id }}">{{ $item->designation_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                            <div class="col-sm-12 col-md-7">
                                <img class="img_25" src="{{ asset('uploads/team') }}/{{ $team->photo }}" alt="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Photo</label>
                            <div class="col-sm-12 col-md-7">
                              <input type="file" class="form-control" name="photo">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Facebook</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="facebook" value="{{ $team->facebook }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Twitter</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="twitter" value="{{ $team->twitter }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Linkedin</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="linkedin" value="{{ $team->linkedin }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Youtube</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="youtube" value="{{ $team->youtube }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Google Plus</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="google_plus" value="{{ $team->google_plus }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Instagram</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="instagram" value="{{ $team->instagram }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Flickr</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="flickr" value="{{ $team->flickr }}">
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
