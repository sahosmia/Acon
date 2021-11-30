@extends('admin.admin_layout')

@section('service')
active
@endsection


@section('content')


<div class="section-header">
    <h1>View Service</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.service_add') }}" class="btn btn-primary">Add New</a>
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
                    <th>Photo</th>
                    <th>Banner</th>
                    <th>Heading</th>
                    <th class="w_200">Action</th>
                </tr>
              </thead>
              <tbody>

                  @foreach ($services as $key => $item)
                      <tr>
                          <td class="w_50">{{ $services->firstItem() + $key }}</td>

                          <td><img class="img_200" src="{{ asset('uploads/service') }}/{{ $item->photo }}" alt="{{ $item->heading }}" ></td>
                          <td><img class="img_200" src="{{ asset('uploads/banner') }}/{{ $item->banner }}" alt="{{ $item->heading }}" ></td>
                          <td>{{ $item->heading }}</td>

                          <td>
                              <a href="{{ url('admin/service/edit') }}/{{ $item->id }}" class="btn btn-primary btn-xs">Edit</a>
                              <a href="{{ url('admin/service/delete') }}/{{ $item->id }}" class="btn btn-danger btn-xs">Delete</a>
                          </td>
                      </tr>
                    @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
@endsection
