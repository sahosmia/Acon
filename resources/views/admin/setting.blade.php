@extends('admin.admin_layout')

@section('title', 'Settings')
@section('settings', 'active')


@section('content')
<div class="section-header">
    <h1>Setting</h1>
</div>
<section class="section-body">
    <div class="row">
		<div class="col-md-12">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    <p>{{ session()->get('success') }}</p>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
		</div>
	</div>




<div class="col-12 col-sm-12 col-lg-12">
    <div class="card">
      <div class="card-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="logo-tab" data-toggle="tab" href="#logo" role="tab" aria-controls="logo" aria-selected="true">Logo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="favicon-tab" data-toggle="tab" href="#favicon" role="tab" aria-controls="favicon" aria-selected="false">Favicon</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="login_background-tab" data-toggle="tab" href="#login_background" role="tab" aria-controls="login_background" aria-selected="false">Login Background</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="general_content-tab" data-toggle="tab" href="#general_content" role="tab" aria-controls="general_content" aria-selected="false">General Content</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="email_settings-tab" data-toggle="tab" href="#email_settings" role="tab" aria-controls="email_settings" aria-selected="false">Email Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="sidebar_footer-tab" data-toggle="tab" href="#sidebar_footer" role="tab" aria-controls="sidebar_footer" aria-selected="false">Sidebar & Footer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Home Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="banner-tab" data-toggle="tab" href="#banner" role="tab" aria-controls="banner" aria-selected="false">Banner</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="color-tab" data-toggle="tab" href="#color" role="tab" aria-controls="color" aria-selected="false">Color</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="false">Other</a>
          </li>
        </ul>

        <div class="tab-content" id="myTabContent">

          <div class="tab-pane fade show active" id="logo" role="tabpanel" aria-labelledby="logo-tab">
            <div class="card-body">
                <form action="{{ route('logo_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h6 class="p-2 seo-info">Web Site Logo</h6>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_25" src="{{ asset('uploads/logo') }}/{{ $setting_data->logo }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="photo_logo">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update Logo</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Admin Logo</h6>
                <form action="{{ route('admin_logo_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_25" src="{{ asset('uploads/logo') }}/{{ $setting_data->logo_admin }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="photo_logo_admin">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update Logo</button>
                        </div>
                    </div>
                </form>

            </div>
          </div>

          <div class="tab-pane fade" id="favicon" role="tabpanel" aria-labelledby="favicon-tab">
            <div class="card-body">
                <form action="{{ route('favicon_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_100" src="{{ asset('uploads/logo') }}/{{ $setting_data->favicon }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="photo_favicon">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update Favicon</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>



          <div class="tab-pane fade" id="login_background" role="tabpanel" aria-labelledby="login_background-tab">
            <div class="card-body">
                <form action="{{route('login_bg_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_50" src="{{ asset('uploads') }}/{{ $setting_data->login_bg }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="login_bg">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update Favicon</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>

          <div class="tab-pane fade" id="general_content" role="tabpanel" aria-labelledby="general_content-tab">
            <div class="card-body">
                <form action="{{route('generel_update') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Footer - Copyright </label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="footer_copyright" value="{{ $setting_data->footer_copyright }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Footer - Address </label>
                        <div class="col-sm-12 col-md-7">
                          <textarea type="text" class="form-control h_70" name="footer_address" >{{ $setting_data->footer_address }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Footer - Phone </label>
                        <div class="col-sm-12 col-md-7">
                          <textarea type="text" class="form-control h_70" name="footer_phone" >{{ $setting_data->footer_phone }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Footer - Working Hour </label>
                        <div class="col-sm-12 col-md-7">
                          <textarea type="text" class="form-control h_70" name="footer_working_hour" >{{ $setting_data->footer_working_hour }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Footer - About us </label>
                        <div class="col-sm-12 col-md-7">
                          <textarea type="text" class="form-control h_140" name="footer_about" >{{ $setting_data->footer_about }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Top Bar Email </label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="top_bar_email" value="{{ $setting_data->top_bar_email }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Top Bar Phone Number </label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="top_bar_phone" value="{{ $setting_data->top_bar_phone }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contact Map iFrame </label>
                        <div class="col-sm-12 col-md-7">
                          <textarea type="text" class="form-control h_140" name="contact_map_iframe" >{{ $setting_data->contact_map_iframe }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Footer Address Icon</h6>
                <form action="{{ route('address_icon_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_100" src="{{ asset('uploads/footer_icon') }}/{{ $setting_data->footer_address_icon }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="footer_address_icon">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>


                <h6 class="p-2 seo-info">Footer - Phone Icon</h6>
                <form action="{{ route('phone_icon_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_100" src="{{ asset('uploads/footer_icon') }}/{{ $setting_data->footer_phone_icon }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="footer_phone_icon">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>



                <h6 class="p-2 seo-info">Footer - Working Hour Icon</h6>
                <form action="{{ route('working_hour_icon_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_100" src="{{ asset('uploads/footer_icon') }}/{{ $setting_data->footer_working_hour_icon }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="footer_working_hour_icon">
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

          <div class="tab-pane fade" id="email_settings" role="tabpanel" aria-labelledby="email_settings-tab">
            <div class="card-body">
                <form action="{{route('email_update') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Send Email From</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="send_email_from" value="{{ $setting_data->send_email_from }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Receive Email To</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="receive_email_to" value="{{ $setting_data->receive_email_to }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">SMTP Active?</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" name="smtp_active">
                                <option value="1" {{ $setting->smtp_active == 1 ? "selected" : "" }}>Yes</option>
                                <option value="2" {{ $setting->smtp_active == 2 ? "selected" : "" }}>No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">SMTP SSL?</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" name="smtp_ssl">
                                <option value="1" {{ $setting->smtp_ssl == 1 ? "selected" : "" }}>Yes</option>
                                <option value="2" {{ $setting->smtp_ssl == 2 ? "selected" : "" }}>No</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">SMTP Host</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="smtp_host" value="{{ $setting_data->smtp_host }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">SMTP Port</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="smtp_port" value="{{ $setting_data->smtp_port }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">SMTP Username</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="smtp_username" value="{{ $setting_data->smtp_username }}">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">SMTP Password</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="smtp_password" value="{{ $setting_data->smtp_password }}">
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

          <div class="tab-pane fade" id="sidebar_footer" role="tabpanel" aria-labelledby="sidebar_footer-tab">
            <div class="card-body">
                <form action="{{route('sidebar_footer_update') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">How many recent posts?</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="total_recent_post" value="{{ $setting_data->total_recent_post }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">How many popular posts?</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="total_popular_post" value="{{ $setting_data->total_popular_post }}">
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

          <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="card-body">

                <h6 class="p-2 seo-info">Why Choose Us</h6>
                <form action="{{route('why_choose_update') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="why_choose_title" value="{{ $setting_data->why_choose_title }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subtitle</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="why_choose_subtitle" value="{{ $setting_data->why_choose_subtitle }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" name="why_choose_status">
                                <option value="1" {{ $setting->why_choose_status == 1 ? "selected" : "" }}>Show</option>
                                <option value="2" {{ $setting->why_choose_status == 2 ? "selected" : "" }}>Hide</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>


                <h6 class="p-2 seo-info">Why Choose Main Photo</h6>
                <form action="{{ route('why_choose_main_photo_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_25" src="{{ asset('uploads') }}/{{ $setting_data->why_choose_main_photo }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="why_choose_main_photo">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>


                <h6 class="p-2 seo-info">Why Choose Item Photo</h6>
                <form action="{{ route('why_choose_item_photo_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_25" src="{{ asset('uploads') }}/{{ $setting_data->why_choose_item_bg }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="why_choose_item_bg">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>


                <h6 class="p-2 seo-info">Service</h6>
                <form action="{{route('service_update') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="service_title" value="{{ $setting_data->service_title }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subtitle</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="service_subtitle" value="{{ $setting_data->service_subtitle }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" name="service_status">
                                <option value="1" {{ $setting->service_status == 1 ? "selected" : "" }}>Show</option>
                                <option value="2" {{ $setting->service_status == 2 ? "selected" : "" }}>Hide</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>


                <h6 class="p-2 seo-info">Portfolio</h6>
                <form action="{{route('portfolio_update') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="portfolio_title" value="{{ $setting_data->portfolio_title }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subtitle</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="portfolio_subtitle" value="{{ $setting_data->portfolio_subtitle }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" name="portfolio_status">
                                <option value="1" {{ $setting->portfolio_status == 1 ? "selected" : "" }}>Show</option>
                                <option value="2" {{ $setting->portfolio_status == 2 ? "selected" : "" }}>Hide</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Team</h6>
                <form action="{{route('team_update') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="team_title" value="{{ $setting_data->team_title }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subtitle</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="team_subtitle" value="{{ $setting_data->team_subtitle }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" name="team_status">
                                <option value="1" {{ $setting->team_status == 1 ? "selected" : "" }}>Show</option>
                                <option value="2" {{ $setting->team_status == 2 ? "selected" : "" }}>Hide</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Testimonial</h6>
                <form action="{{route('testimonial_update') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="testimonial_title" value="{{ $setting_data->testimonial_title }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subtitle</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="testimonial_subtitle" value="{{ $setting_data->testimonial_subtitle }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" name="testimonial_status">
                                <option value="1" {{ $setting->testimonial_status == 1 ? "selected" : "" }}>Show</option>
                                <option value="2" {{ $setting->testimonial_status == 2 ? "selected" : "" }}>Hide</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Testimonial Main photo</h6>
                <form action="{{ route('testimonial_main_photo_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_25" src="{{ asset('uploads') }}/{{ $setting_data->testimonial_main_photo }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="testimonial_main_photo">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update </button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">FAQ</h6>
                <form action="{{route('faq_update') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="faq_title" value="{{ $setting_data->faq_title }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subtitle</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="faq_subtitle" value="{{ $setting_data->faq_subtitle }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" name="faq_status">
                                <option value="1" {{ $setting->faq_status == 1 ? "selected" : "" }}>Show</option>
                                <option value="2" {{ $setting->faq_status == 2 ? "selected" : "" }}>Hide</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Faq Main photo</h6>
                <form action="{{ route('faq_main_photo_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_25" src="{{ asset('uploads') }}/{{ $setting_data->faq_main_photo }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="faq_main_photo">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>


                <h6 class="p-2 seo-info">Gallery</h6>
                <form action="{{route('gallery_update') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="gallery_title" value="{{ $setting_data->gallery_title }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subtitle</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="gallery_subtitle" value="{{ $setting_data->gallery_subtitle }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" name="gallery_status">
                                <option value="1" {{ $setting->gallery_status == 1 ? "selected" : "" }}>Show</option>
                                <option value="2" {{ $setting->gallery_status == 2 ? "selected" : "" }}>Hide</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Recent Post</h6>
                <form action="{{route('recent_post_update') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="recent_post_title" value="{{ $setting_data->recent_post_title }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subtitle</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="recent_post_subtitle" value="{{ $setting_data->recent_post_subtitle }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" name="recent_post_status">
                                <option value="1" {{ $setting->recent_post_status == 1 ? "selected" : "" }}>Show</option>
                                <option value="2" {{ $setting->recent_post_status == 2 ? "selected" : "" }}>Hide</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Partner</h6>
                <form action="{{route('partner_update') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="partner_title" value="{{ $setting_data->partner_title }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subtitle</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="partner_subtitle" value="{{ $setting_data->partner_subtitle }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" name="partner_status">
                                <option value="1" {{ $setting->partner_status == 1 ? "selected" : "" }}>Show</option>
                                <option value="2" {{ $setting->partner_status == 2 ? "selected" : "" }}>Hide</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>


                <h6 class="p-2 seo-info">Counter Background Photo</h6>
                <form action="{{ route('counter_bg_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_25" src="{{ asset('uploads') }}/{{ $setting_data->counter_bg }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="counter_bg">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Counter Settings</h6>
                <form action="{{route('counter_update') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Counter1 Text</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="counter1_text" value="{{ $setting_data->counter1_text }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Counter1 Value</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="counter1_value" value="{{ $setting_data->counter1_value }}">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Counter2 Text</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="counter2_text" value="{{ $setting_data->counter2_text }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Counter2 Value</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="counter2_value" value="{{ $setting_data->counter2_value }}">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Counter3 Text</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="counter3_text" value="{{ $setting_data->counter3_text }}">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Counter3 Value</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="counter3_value" value="{{ $setting_data->counter3_value }}">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Counter4 Text</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="counter4_text" value="{{ $setting_data->counter4_text }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Counter4 Value</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="counter4_value" value="{{ $setting_data->counter4_value }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" name="counter_status">
                                <option value="1" {{ $setting->counter_status == 1 ? "selected" : "" }}>Show</option>
                                <option value="2" {{ $setting->counter_status == 2 ? "selected" : "" }}>Hide</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Total Recent Post (How many last posts will be shown?)</h6>
                <form action="{{route('total_recent_post_update') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Total Recent Posts</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="total_recent_post_home" value="{{ $setting_data->total_recent_post_home }}">
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

          <div class="tab-pane fade" id="banner" role="tabpanel" aria-labelledby="banner-tab">
            <div class="card-body">
                <h6 class="p-2 seo-info"> About Us Page Banner</h6>
                <form action="{{ route('about_banner_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_banner" src="{{ asset('uploads/banner') }}/{{ $setting_data->banner_about }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="photo">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info"> Faq Page Banner</h6>
                <form action="{{ route('faq_banner_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_banner" src="{{ asset('uploads/banner') }}/{{ $setting_data->banner_faq }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="photo">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Gallery Page Banner</h6>
                <form action="{{ route('gallery_banner_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_banner" src="{{ asset('uploads/banner') }}/{{ $setting_data->banner_gallery }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="photo">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Service Page Banner</h6>
                <form action="{{ route('service_banner_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_banner" src="{{ asset('uploads/banner') }}/{{ $setting_data->banner_service }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="photo">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Portfolio Page Banner</h6>
                <form action="{{ route('service_banner_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_banner" src="{{ asset('uploads/banner') }}/{{ $setting_data->banner_portfolio }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="photo">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Testimonial Page Banner</h6>
                <form action="{{ route('testimonial_banner_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_banner" src="{{ asset('uploads/banner') }}/{{ $setting_data->banner_testimonial }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="photo">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">News Page Banner</h6>
                <form action="{{ route('news_banner_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_banner" src="{{ asset('uploads/banner') }}/{{ $setting_data->banner_news }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="photo">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Contact Page Banner</h6>
                <form action="{{ route('contact_banner_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_banner" src="{{ asset('uploads/banner') }}/{{ $setting_data->banner_contact }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="photo">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Search Page Banner</h6>
                <form action="{{ route('search_banner_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_banner" src="{{ asset('uploads/banner') }}/{{ $setting_data->banner_search }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="photo">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Category Page Banner</h6>
                <form action="{{ route('category_banner_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_banner" src="{{ asset('uploads/banner') }}/{{ $setting_data->banner_category }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="photo">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Terms and Condition Page Banner</h6>
                <form action="{{ route('terms_banner_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_banner" src="{{ asset('uploads/banner') }}/{{ $setting_data->banner_terms }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="photo">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

                <h6 class="p-2 seo-info">Privacy Page Banner</h6>
                <form action="{{ route('privacy_banner_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                        <div class="col-sm-12 col-md-7 img_bg">
                            <img class="existing-photo img_banner" src="{{ asset('uploads/banner') }}/{{ $setting_data->banner_privacy }}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="photo">
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

          <div class="tab-pane fade" id="color" role="tabpanel" aria-labelledby="color-tab">
            <div class="card-body">
                <form action="{{route('color_update') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Theme Color 1</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="theme_color_1" class="form-control jscolor col-sm-12 col-md-7" value="{{ $setting->theme_color_1 }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Theme Color 2</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="theme_color_2" class="form-control jscolor col-sm-12 col-md-7" value="{{ $setting->theme_color_2 }}">
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

          <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="oother-tab">
            <div class="card-body">
                <form action="{{route('other_update') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Preloader Status</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" name="preloader_status">
                                <option value="1" {{ $setting->preloader_status == 1 ? "selected" : "" }}>Show</option>
                                <option value="2" {{ $setting->preloader_status == 2 ? "selected" : "" }}>Hide</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tawk Live Chat Code</label>
                        <div class="col-sm-12 col-md-7">
                          <textarea type="text" class="form-control h_280" name="tawk_live_chat_code" >{{ $setting_data->tawk_live_chat_code }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tawk Live Chat Status</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" name="tawk_live_chat_status">
                                <option value="1" {{ $setting->tawk_live_chat_status == 1 ? "selected" : "" }}>Show</option>
                                <option value="2" {{ $setting->tawk_live_chat_status == 2 ? "selected" : "" }}>Hide</option>
                            </select>
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
  </div>
</section>
@endsection
