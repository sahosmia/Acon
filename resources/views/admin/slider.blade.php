@extends('admin.admin_layout')

@section('slider')
active
@endsection


@section('content')

<div class="section-header">
    <h1>View Slider</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.slider_add') }}" class="btn btn-primary">Add New</a>
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
                                    <th class="w_200">Photo</th>
                                    <th>Heading</th>
                                    <th>Button1 Text</th>
                                    <th>Button1 URL</th>
                                    <th>Button2 Text</th>
                                    <th>Button2 URL</th>
                                    <th class="w_200">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($sliders as $key => $item)
                                    <tr>
                                        <td>{{ $sliders->firstItem() + $key }}</td>

                                        <td><img class="img_100" src="{{ asset('uploads/slider') }}/{{ $item->photo }}" alt="{{ $item->heading }}" ></td>
                                        <td>{{ $item->heading }}</td>
                                        <td>{{ $item->button1_text }}</td>
                                        <td>{{ $item->button1_url }}</td>
                                        <td>{{ $item->button2_text }}</td>
                                        <td>{{ $item->button2_url }}</td>
                                        <td>
                                            <a href="{{ url('admin/slider/edit') }}/{{ $item->id }}" class="btn btn-primary btn-xs">Edit</a>
                                            <a href="{{ url('admin/slider/delete') }}/{{ $item->id }}" class="btn btn-danger btn-xs" >Delete</a>
                                        </td>
                                    </tr>

                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
