@extends('admin.admin_layout')

@section('language')
active
@endsection


@section('content')
<div class="section-header">
    <h1>Edit Language Setting</h1>
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

                    @foreach ($languages as $item)
                        @error($item->name)
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    @endforeach

                    <form action="{{ route('admin.language_edit') }}" method="POST">
                        @csrf
                        @foreach ($languages as $item)
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ $item->name }}</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="language[{{ $item->name }}]" value="{{ $item->val }}">
                                </div>
                            </div>
                        @endforeach


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
