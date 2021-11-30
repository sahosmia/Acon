@extends('admin.admin_layout')

@section('social')
active
@endsection


@section('content')

<div class="section-header">
    <h1>View Social Media </h1>
</div>


  <div class="section-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <p class="text-danger">If you do not want to show a social media in your front end page, just leave the input field blank.</p>

                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            <p>{{ session()->get('success') }}</p>
                        </div>
                    @endif

                    @php
                        $all_fild = ['Facebook', 'Twitter', 'Linkedin', 'Googleplus', 'Pinterest', 'Youtube', 'Instagram', 'Tumblr', 'Flickr', 'Reddit', 'Snapchat', 'Whatsapp', 'Quora', 'Stumbleupon', 'Delicious', 'Digg'];
                    @endphp

                    @foreach ($all_fild as $item)
                        @error($item)
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    @endforeach

                    <form action="{{ route('admin.social_update') }}" method="POST">
                    @csrf


                        @foreach ($socials as $item)
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ $item->social_name }}</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="social[{{ $item->social_name }}]" value="{{ $item->social_url }}">
                            </div>
                        </div>

                        @endforeach

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
