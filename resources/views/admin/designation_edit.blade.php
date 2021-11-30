@extends('admin.admin_layout')

@section('team-drop')
active
@endsection

@section('designation')
active
@endsection

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

                    @php
                        $all_fild = ['designation_name'];
                    @endphp

                    @foreach ($all_fild as $item)
                        @error($item)
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    @endforeach

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
