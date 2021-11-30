@extends('admin.admin_layout')

@section('news-drop')
active
@endsection

@section('news')
active
@endsection

@section('content')
<div class="section-header">
    <h1>View News</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.news_add') }}" class="btn btn-primary">Add New</a>
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
                <th>Photo</th>
                <th>Banner</th>
                <th>Title</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>

              @foreach ($newss as $key => $item)
                  <tr>
                      <td>{{ $newss->firstItem() + $key }}</td>
                      <td><img class="img_200" src="{{ asset('uploads/news') }}/{{ $item->photo }}" alt="{{ $item->title }}"></td>
                      <td><img class="img_200" src="{{ asset('uploads/banner') }}/{{ $item->banner }}" alt="{{ $item->title }}"></td>
                      <td>{{ $item->title }}</td>
                      <td>{{ $news_category->find($item->category_id)->name }}</td>


                      <td>
                          <a href="{{ url('admin/news/edit') }}/{{ $item->id }}" class="btn btn-primary btn-xs">Edit</a>
                          <a href="{{ url('admin/news/delete') }}/{{ $item->id }}" class="btn btn-danger btn-xs">Delete</a>
                      </td>
                  </tr>

                @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>






@endsection
