@extends('admin.admin_layout')

@section('comment')
active
@endsection


@section('content')


<div class="section-header">
    <h1>Edit Comment</h1>
</div>


<div class="section-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            <p>{{ session()->get('success') }}</p>
                        </div>
                    @endif

                    @php
                        $all_fild = ['code_body'];
                    @endphp

                    @foreach ($all_fild as $item)
                        @error($item)
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    @endforeach

                    <p>Go to the facebook developer section ( <a href="https://developers.facebook.com/docs/plugins/comments/">https://developers.facebook.com/docs/plugins/comments/</a> ) to get your comment codes.</p>

                    <form action="{{ route('admin.comment_edit') }}" method="POST">
                        @csrf

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Code to use after the opening <body> tag</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea type="text" class="form-control h_280" name="code_body" >{{ $comment->code_body }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
