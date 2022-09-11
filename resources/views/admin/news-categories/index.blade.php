@extends('admin.admin_layout')

@section('title', 'News Category')
@section('news_category', 'active')
@section('news-drop', 'active')

@section('content')
<div class="section-header">
    <h1>View News Category</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.news_category_add') }}" class="btn btn-primary">Add New</a>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-md-12">

          <div class="card">
            <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($news_categorys as $key => $item)
                            <tr>
                                <td>{{ $news_categorys->firstItem() + $key }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href="{{ url('admin/news_category/edit') }}/{{ $item->id }}" class="btn btn-primary btn-xs">Edit</a>
                                    <a href="{{ url('admin/news_category/delete') }}/{{ $item->id }}" class="btn btn-danger btn-xs">Delete</a>
                                </td>
                            </tr>
                        @empty
                        No data to show
                        @endforelse
                    </tbody>
                </table>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
