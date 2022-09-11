@extends('admin.admin_layout')

@section('title', 'Designation')
@section('designation', 'active')
@section('team-drop', 'active')

@section('content')
<div class="section-header">
    <h1>View Designation</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.designations.create') }}" class="btn btn-primary">Add New</a>
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
                            <a href="{{ route('admin.designations.edit', $item->id) }}" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('admin.designations.destroy', $item->id) }}" method="post" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i></button>
                            </form>
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
