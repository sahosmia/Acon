@extends('admin.admin_layout')

@section('team-drop')
active
@endsection

@section('team')
active
@endsection

@section('content')
<div class="section-header">
    <h1>Add Team</h1>
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

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.team_insert') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select Designation</label>
                            <div class="col-sm-12 col-md-7">
                                <select class="form-control select2" name="designation_id">
                                    <option value="">Select a designation</option>
                                    @foreach ($designations as $item)
                                    <option {{ old('designation_id') == $item->id ? "selected" : "" }} value="{{ $item->id }}">{{ $item->designation_name }}</option>
                                    @endforeach
                                </select>
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
                                <input type="text" class="form-control" name="facebook" value="{{ old('facebook') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Twitter</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="twitter" value="{{ old('twitter') }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Linkedin</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="linkedin" value="{{ old('linkedin') }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Youtube</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="youtube" value="{{ old('youtube') }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Google Plus</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="google_plus" value="{{ old('google_plus') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Instagram</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="instagram" value="{{ old('instagram') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Flickr</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="flickr" value="{{ old('flickr') }}">
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
