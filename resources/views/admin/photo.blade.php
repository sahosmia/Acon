@extends('admin.admin_layout')

@section('title', 'Photo')
@section('photo', 'active')



@section('content')
<div class="section-header">
    <h1>View Photos</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.photo_add') }}" class="btn btn-primary">Add New</a>
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
                                    <th>Caption</th>
                                    <th>Photo</th>
                                    <th>Status</th>
                                    <th class="w_200">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($photos as $key => $item)
                                    <tr>
                                        <td class="w_50">{{ $photos->firstItem() + $key }}</td>
                                        <td>{{ $item->caption }}</td>

                                        <td><img class="img_200" src="{{ asset('uploads/gallery') }}/{{ $item->photo }}"></td>
                                        <td>{{ $item->status == 1 ? "Show" : "hide" }}</td>

                                        <td>
                                            <a href="{{ url('admin/photo/edit') }}/{{ $item->id }}" class="btn btn-primary btn-xs">Edit</a>
                                            <a href="{{ url('admin/photo/delete') }}/{{ $item->id }}" class="btn btn-danger btn-xs">Delete</a>
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
