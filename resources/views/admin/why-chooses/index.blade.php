@extends('admin.admin_layout')

@section('title', 'Why Choose')
@section('why_choose', 'active')


@section('content')
<div class="section-header">
    <h1>View Why Choose</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.why-chooses.create') }}" class="btn btn-primary">Add New</a>
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
                            <th>Heading</th>
                            <th>Content</th>
                            <th class="w_200">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($why_chooses as $key => $item)
                            <tr>
                                <td class="w_50">{{ $why_chooses->firstItem() + $key }}</td>

                                <td><img class="img_bg_deep img_100" src="{{ asset('uploads/why_choose') }}/{{ $item->photo }}" alt="{{ $item->photo }}"></td>
                                <td>{{ $item->heading }}</td>
                                <td>{{ $item->content }}</td>

                                <td>
                                    <a href="{{ route('admin.why-chooses.edit', $item->id) }}" class="btn btn-primary btn-xs">Edit</a>
                                    <form action="{{ route('admin.why-chooses.destroy', $item->id) }}" method="post" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            NO data to show
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
