@extends('admin.admin_layout')

@section('title', 'Designation')
@section('designation', 'active')
@section('team-drop', 'active')

@section('content')
<div class="section-header">
    <h1>View Designation</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.designation_add') }}" class="btn btn-primary">Add New</a>
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
                    <th>Designation Name</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($designations as $key => $item)
                    <tr>
                        <td class="w_50">{{ $designations->firstItem() + $key }}</td>
                        <td>{{ $item->designation_name }}</td>
                        <td>
                            <a href="{{ url('admin/designation/edit') }}/{{ $item->id }}" class="btn btn-primary btn-xs">Edit</a>
                            <a href="{{ url('admin/designation/delete') }}/{{ $item->id }}" class="btn btn-danger btn-xs">Delete</a>
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

@endsection
