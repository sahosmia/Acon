@extends('admin.admin_layout')

@section('title', 'Faq')
@section('faq', 'active')

@section('content')
<div class="section-header">
    <h1>View Faq</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.faq_add') }}" class="btn btn-primary">Add New</a>
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
                            <th>Title</th>
                            <th>Show on home?</th>
                            <th class="w_200">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($faqs as $key => $item)
                            <tr>
                                <td class="w_50">{{$faqs->firstItem() + $key }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->show == 1 ? "On Faq" : "On Home And Faq"}}</td>
                                <td>
                                    <a href="{{ url('admin/faq/edit') }}/{{ $item->id }}" class="btn btn-primary btn-xs">Edit</a>
                                    <a href="{{ url('admin/faq/delete') }}/{{ $item->id }}" class="btn btn-danger btn-xs">Delete</a>
                                </td>
                            </tr>
                            @empty
                            No data to show
                        @endforelse

                        {{ $faqs->links() }}


                    </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

@endsection
