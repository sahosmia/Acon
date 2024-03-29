@extends('admin.admin_layout')

@section('title', 'Portfolio Category')
@section('portfolio_category', 'active')
@section('portfolio-drop', 'active')



@section('content')
<div class="section-header">
    <h1>View Portfolio Category</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.portfolio_category_add') }}" class="btn btn-primary">Add New</a>
    </div>
</div>


<div class="section-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th class="w_200">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($portfolio_categorys as $key => $item)
                                    <tr>
                                        <td class="w_50">{{ $portfolio_categorys->firstItem() + $key }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->status == 1 ? "Active" : "Inactive"}}</td>
                                        <td>
                                            <a href="{{ url('admin/portfolio_category/edit') }}/{{ $item->id }}" class="btn btn-primary btn-xs">Edit</a>
                                            <a href="{{ url('admin/portfolio_category/delete') }}/{{ $item->id }}" class="btn btn-danger btn-xs">Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    no data to show
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
