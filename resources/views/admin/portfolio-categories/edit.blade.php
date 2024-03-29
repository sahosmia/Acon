@extends('admin.admin_layout')

@section('title', 'Portfolio Category | Update')
@section('portfolio_category', 'active')
@section('portfolio-drop', 'active')


@section('content')
<div class="section-header">
    <h1>Edit Portfolio Category </h1>
    <div class="ml-auto">
        <a href="{{ route('admin.portfolio_category') }}" class="btn btn-primary">View All</a>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    @include('include.message')

                    <form action="{{ route('admin.portfolio_category_edit') }}" method="POST">
                    @csrf
                        <input type="hidden" name="id" value="{{ $portfolio_categorys->id }}">

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="name" value="{{ $portfolio_categorys->name }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                            <div class="col-sm-12 col-md-7">
                                <select class="form-control select2" name="status"
                                    <option value="">Select Show on where</option>
                                    <option {{ $portfolio_categorys->status == 1 ? "selected" : "" }} value="1">Active</option>
                                    <option {{ $portfolio_categorys->status == 2 ? "selected" : "" }} value="2">Inactive</option>
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
