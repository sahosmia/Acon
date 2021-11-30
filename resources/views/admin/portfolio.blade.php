@extends('admin.admin_layout')

@section('portfolio-drop')
active
@endsection

@section('portfolio')
active
@endsection



@section('content')
<div class="section-header">
    <h1>View Portfolio</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.portfolio_add') }}" class="btn btn-primary">Add New</a>
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
                                <th>Name</th>
                                <th>Category</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portfolios as $key => $item)

                                <tr>
                                    <td class="w_50">{{ $portfolios->firstItem() + $key }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $portfolio_category->find($item->category_id)->name }}</td>
                                    <td><img class="img_100" src="{{ asset('uploads/portfolio') }}/{{ $item->photo }}" alt="{{ $item->photo }}"></td>


                                    <td>
                                        <a class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal{{ $item->id }}">Details</a>
                                        <a href="{{ url('admin/portfolio/edit') }}/{{ $item->id }}" class="btn btn-primary btn-xs">Edit</a>
                                        <a href="{{ url('admin/portfolio/delete') }}/{{ $item->id }}" class="btn btn-danger btn-xs">Delete</a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="myModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">View Details</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="rTable">
                                                    <div class="rTableRow ">
                                                        <div class="rTableHead"><strong>Name</strong></div>
                                                        <div class="rTableCell">
                                                            {{ $item->name }}
                                                        </div>
                                                    </div>
                                                    <div class="rTableRow mt-3">
                                                        <div class="rTableHead"><strong>Slug</strong></div>
                                                        <div class="rTableCell">
                                                            {{ $item->slug }}
                                                        </div>
                                                    </div>
                                                    <div class="rTableRow mt-3">
                                                        <div class="rTableHead"><strong>Content</strong></div>
                                                        <div class="rTableCell">
                                                            {!! clean($item->content) !!}
                                                        </div>
                                                    </div>

                                                    <div class="rTableRow">
                                                        <div class="rTableHead"><strong>Client Name</strong></div>
                                                        <div class="rTableCell">
                                                            {{ $item->client_name }}
                                                        </div>
                                                    </div>

                                                    <div class="rTableRow mt-3">
                                                        <div class="rTableHead"><strong>Client Company</strong></div>
                                                        <div class="rTableCell">
                                                            {{ $item->client_company }}
                                                        </div>
                                                    </div>
                                                    <div class="rTableRow mt-3">
                                                        <div class="rTableHead"><strong>Project Start Date</strong></div>
                                                        <div class="rTableCell">
                                                            {{ $item->start_date }}
                                                        </div>
                                                    </div>
                                                    <div class="rTableRow mt-3">
                                                        <div class="rTableHead"><strong>Project End Date</strong></div>
                                                        <div class="rTableCell">
                                                            {{ $item->end_date }}
                                                        </div>
                                                    </div>
                                                    <div class="rTableRow mt-3">
                                                        <div class="rTableHead"><strong>Website</strong></div>
                                                        <div class="rTableCell">
                                                            {{ $item->website }}
                                                        </div>
                                                    </div>
                                                    <div class="rTableRow mt-3">
                                                        <div class="rTableHead"><strong>Cost</strong></div>
                                                        <div class="rTableCell">
                                                            {{ $item->cost }}
                                                        </div>
                                                    </div>
                                                    <div class="rTableRow mt-3">
                                                        <div class="rTableHead"><strong>Client Comment</strong></div>
                                                        <div class="rTableCell">
                                                            {{ $item->client_comment }}
                                                        </div>
                                                    </div>
                                                    <div class="rTableRow mt-3">
                                                        <div class="rTableHead"><strong>Category</strong></div>
                                                        <div class="rTableCell">
                                                            {{ $portfolio_category->find($item->category_id)->name }}
                                                        </div>
                                                    </div>
                                                    <div class="rTableRow mt-3">
                                                        <div class="rTableHead"><strong>Featured Photo</strong></div>
                                                        <div class="rTableCell">
                                                            <img class="img_200" src="{{ asset('uploads/portfolio') }}/{{ $item->photo }}" alt="" >
                                                        </div>
                                                    </div>
                                                    <div class="rTableRow mt-3">
                                                        <div class="rTableHead"><strong>Banner</strong></div>
                                                        <div class="rTableCell">
                                                            <img class="img_200" src="{{ asset('uploads/banner') }}/{{ $item->banner }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="rTableRow mt-3">
                                                        <div class="rTableHead"><strong>Other Photos</strong></div>
                                                        <div class="rTableCell">

                                                            @foreach ($portfolio_photo->where('portfolio_id', $item->id ) as $item)
                                                                    <img class="img_200" src="{{ asset('uploads/portfolio_photos') }}/{{ $item->photo }}" alt="">
                                                        @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
