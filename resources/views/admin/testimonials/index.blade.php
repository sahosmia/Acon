@extends('admin.admin_layout')

@section('title', 'Testimonial')
@section('testimonial', 'active')

@section('content')

<div class="section-header">
    <h1>View Testimonial</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">Add New</a>
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
                            <th>Comment</th>
                            <th class="w_200">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($testimonials as $key => $item)
                            <tr>
                                <td>{{ $testimonials->firstItem() + $key }}</td>
                                <td><img class="img_bg_deep img_100" src="{{ asset('uploads/testimonial') }}/{{ $item->photo }}" alt="{{ $item->photo }}"></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->comment }}</td>
                                <td>
                                    <a href="{{ route('admin.testimonials.edit', $item->id) }}" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('admin.testimonials.destroy', $item->id) }}" method="post" class="d-inline-block">
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
    </div>
</div>
@endsection
