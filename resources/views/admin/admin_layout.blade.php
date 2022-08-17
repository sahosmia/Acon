<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/codemirror/lib/codemirror.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/codemirror/theme/duotone-dark.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/inline.css') }}">


</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>

        </form>
        <ul class="navbar-nav navbar-right">
          <li class="nav-link ">
            <a href="{{ route('front') }}" target="_blank" class="btn btn-dark">View Website</a>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('uploads/user') }}/{{ auth()->user()->photo }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{auth()->user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="{{ route('profile') }}" class="dropdown-item has-icon">
                <i class="far fa-edit"></i> Edit Profile
              </a>
              <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('home') }}">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
            <ul class="sidebar-menu">
              <li class="@yield('dashboard')"><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              <li class="@yield('settings')"><a class="nav-link " href="{{ route('admin.settings') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
              <li class="@yield('slider')"><a class="nav-link" href="{{ route('admin.slider') }}"><i class="far fa-images"></i> <span>Slider</span></a></li>
              <li class="@yield('service')"><a class="nav-link" href="{{ route('admin.service') }}"><i class="fas fa-briefcase"></i> <span>Service</span></a></li>
              <li class="@yield('faq')"><a class="nav-link" href="{{ route('admin.faq') }}"><i class="fas fa-random"></i> <span>Faq</span></a></li>
              <li class="@yield('photo')"><a class="nav-link" href="{{ route('admin.photo') }}"><i class="fas fa-camera"></i> <span>Photo Gallery</span></a></li>
              <li class="nav-item dropdown @yield('portfolio-drop')">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-bars"></i> <span>Portfolio</span></a>
                <ul class="dropdown-menu">
                  <li class="@yield('portfolio_category')"><a class="nav-link" href="{{ route('admin.portfolio_category') }}">Portfolio Category</a></li>
                  <li class="@yield('portfolio')"><a class="nav-link" href="{{ route('admin.portfolio') }}">Portfolio</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown @yield('team-drop')">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-users"></i> <span>Team Member</span></a>
                <ul class="dropdown-menu">
                  <li class="@yield('designation')"><a class="nav-link" href="{{ route('admin.designation') }}">Dasignation</a></li>
                  <li class="@yield('team')"><a class="nav-link" href="{{ route('admin.team') }}">Team Member</a></li>
                </ul>
              </li>
              <li class="@yield('testimonial')"><a class="nav-link" href="{{ route('admin.testimonial') }}"><i class="fa fa-user-plus"></i> <span>Testimonial</span></a></li>
              <li class="@yield('partner')"><a class="nav-link" href="{{ route('admin.partner') }}"><i class="fas fa-handshake"></i> <span>Partner</span></a></li>
              <li class="@yield('why_choose')"><a class="nav-link" href="{{ route('admin.why_choose') }}"><i class="fa fa-bolt"></i> <span>Why Choose Us</span></a></li>
              <li class="@yield('page')"><a class="nav-link" href="{{ route('admin.page') }}"><i class="fas fa-file-alt"></i> <span>Page</span></a></li>
              <li class="nav-item dropdown @yield('news-drop')">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-newspaper"></i> <span>News Section</span></a>
                <ul class="dropdown-menu">
                  <li class="@yield('news_category')"><a class="nav-link" href="{{ route('admin.news_category') }}">News Category</a></li>
                  <li class="@yield('news')"><a class="nav-link" href="{{ route('admin.news') }}">News</a></li>
                </ul>
              </li>
              <li class="@yield('comment')"><a class="nav-link" href="{{ route('admin.comment') }}"><i class="fas fa-comment"></i> <span>Comment</span></a></li>
              <li class="@yield('language')"><a class="nav-link" href="{{ route('admin.language') }}"><i class="fa fa-language"></i> <span>Language</span></a></li>
              <li class="@yield('social')"><a class="nav-link" href="{{ route('admin.social') }}"><i class="fas fa-address-book"></i> <span>Social Media</span></a></li>
            </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
            <section class="section">
            @yield('content')
            </section>
      </div>


    </div>
  </div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{ asset('assets/js/stisla.js') }}"></script>

 <!-- JS Libraies -->
 <script src="{{ asset('assets/js/page/jscolor.js') }}"></script>
 <script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
 <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
 <script src="{{ asset('assets/modules/codemirror/lib/codemirror.js') }}"></script>
 <script src="{{ asset('assets/modules/codemirror/mode/javascript/javascript.js') }}"></script>
 <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
 <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('assets/js/page/forms-advanced-forms.js') }}"></script>


</body>
</html>
