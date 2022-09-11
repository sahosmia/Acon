@extends('admin.admin_layout')

@section('title', 'Partner')
@section('partner', 'active')


@section('content')
<div class="section-header">
    <h1>View Partner</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.partner_add') }}" class="btn btn-primary">Add New</a>
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
                                <th>Name</th>
                                <th class="w_200">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($partners as $key => $item)
                                <tr>
                                    <td class="w_50">{{ $partners->firstItem() + $key }}</td>

                                    <td><img class="img_100" src="{{ asset('uploads/partner') }}/{{ $item->photo }}" alt="{{ $item->photo }}"></td>
                                    <td>{{ $item->name }}</td>

                                    <td>
                                        <a href="{{ url('admin/partner/edit') }}/{{ $item->id }}" class="btn btn-primary btn-xs">Edit</a>
                                        <a href="{{ url('admin/partner/delete') }}/{{ $item->id }}" class="btn btn-danger btn-xs">Delete</a>
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
</div>


@endsection
