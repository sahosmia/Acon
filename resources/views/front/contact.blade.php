@extends('front.front_layout')


@section('meta_description')
{{ $page->md_contact }}
@endsection

@section('meta_title')
{{ $page->mt_contact }}
@endsection


@section('content')
@include('front.include.sub_banner', [
    'heading' => $page->contact_heading,
    'img' => $setting->banner_contact,
])


<div class="contact-area pt-30 pb-60">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4>{{ CONTACT_US_PAGE_FORM_HEADING_TEXT }}</h4>
				<div class="contact-form">
                    @if(session()->has('success'))
                    <div class="callout callout-success">
                        <p>{{ session()->get('success') }}</p>
                    </div>
                    @endif

                    @php
                        $all_fild = ['name', 'email', 'phone', 'message'];
                    @endphp

                    <div class="error">
                        @foreach ($all_fild as $item)
                            @error($item)
                                <p>{{ $message }}</p>
                            @enderror
                        @endforeach
                    </div>

				    <form action="{{ route('contact_send_email') }}" method="POST">
                        @csrf
                        <div class="form-group">
							<label>{{ NAME }}</label>
							<input name="name" type="text" class="form-control" value="{{ old('name') }}">
						</div>
						<div class="form-group">
							<label>{{ EMAIL_ADDRESS }}</label>
							<input name="email" type="text" class="form-control" value="{{ old('email') }}">
						</div>
						<div class="form-group">
							<label>{{ PHONE }}</label>
							<input name="phone" type="text" class="form-control" value="{{ old('phone') }}">
						</div>
						<div class="form-group">
							<label>{{ MESSAGE }}</label>
							<textarea class="form-control" name="message"  rows="3">{{ old('message') }}</textarea>
						</div>
						<button type="submit" class="btn btn-success">{{ SEND_MESSAGE }}</button>
                    </form>
                </div>
			</div>
			<div class="col-md-6">
				<h4>{{ FIND_US_ON_MAP }}</h4>
				<div class="map-area">
                    {!! $setting_data->contact_map_iframe !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
