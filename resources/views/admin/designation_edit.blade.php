@extends('admin.admin_layout')

@section('title', 'Designation | Update')
@section('designation', 'active')
@section('team-drop', 'active')

@section('content')
<div class="section-header">
    <h1>Edit Designation</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.designation') }}" class="btn btn-primary">View All</a>
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

                    <form action="{{ route('admin.designation_edit') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $designations->id }}" name="id">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Designation Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="designation_name" value="{{ $designations->designation_name }}">
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
