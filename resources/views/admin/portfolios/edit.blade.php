@extends('admin.admin_layout')

@section('title', 'Portfolio | Update')
@section('portfolio', 'active')
@section('portfolio-drop', 'active')

@section('content')
<div class="section-header">
    <h1>Edit Portfolio</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.portfolios.index') }}" class="btn btn-primary">View All</a>
    </div>
</div>



<div class="section-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    @include('include.message')

                    <form action="{{ route('admin.portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="name" value="{{ $portfolio->name }}">
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Short Content</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control h_140" name="short_content">{{ $portfolio->short_content }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="summernote" name="content">{{ $portfolio->content }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Client Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="client_name" value="{{ $portfolio->client_name }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Client Company</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="client_company" value="{{ $portfolio->client_company }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Start Date</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control datepicker" name="start_date" value="{{ $portfolio->start_date }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">End Date</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control datepicker" name="end_date" value="{{ $portfolio->end_date }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Website</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="website" value="{{ $portfolio->website }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cost</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="cost" value="{{ $portfolio->cost }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Client Comment</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control h_280" name="client_comment">{{ $portfolio->client_comment }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select Portfolio Category</label>
                            <div class="col-sm-12 col-md-7">
                                <select class="form-control select2" name="category_id">
                                    <option value="">Select a Portfolio Category</option>
                                        @foreach ($categorys as $item)
                                            <option @selected($portfolio->category_id == $item->id) value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>


                        <h6 class="p-2 seo-info">Featured Photo</h6>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                            <div class="col-sm-12 col-md-7">
                                <img class="img_25" src="{{ asset('uploads/portfolio') }}/{{ $portfolio->photo }}" alt="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Featured Photo</label>
                            <div class="col-sm-12 col-md-7">
                              <input type="file" class="form-control" name="photo">
                            </div>
                        </div>

                        <h6 class="p-2 seo-info">Other Photos</h6>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                            <div class="col-sm-12 col-md-7">
                                <table class="table table-bordered">
									@forelse ($portfolio_photo->where('portfolio_id', $portfolio->id ) as $item)
										<tr>
											<td>
												<img class="img_200" src="{{ asset('uploads/portfolio_photos') }}/{{ $item->photo }}" alt="">
											</td>
											<td><a href="{{ url('admin/portfolio/delete/portfolio_photo') }}/{{ $item->id }}" class="btn btn-danger btn-xs">Delete</a></td>
										</tr>
                                    @empty
                                        NO photo
                                    @endforelse
								</table>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Other Photos</label>
                            <div class="col-sm-12 col-md-7">
                              <input type="file" class="form-control" name="photos[]" multiple>
                            </div>
                        </div>

                        <h6 class="p-2 seo-info">Banner Photos</h6>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                            <div class="col-sm-12 col-md-7">
                                <img class="img_50" src="{{ asset('uploads/banner') }}/{{ $portfolio->banner }}" alt="">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Banner</label>
                            <div class="col-sm-12 col-md-7">
                              <input type="file" class="form-control" name="banner">
                            </div>
                        </div>

                        <h6 class="p-2 seo-info">SEO Information</h6>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="meta_title" value="{{ $portfolio->meta_title }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control h_140" name="meta_description">{{ $portfolio->meta_description }}</textarea>
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
