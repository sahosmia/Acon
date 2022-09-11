@extends('admin.admin_layout')

@section('title', 'Dashboard')
@section('dashboard', 'active')

@section('content')

<div class="section-header">
    <h1>View Dashboard</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total News Categories</h4>
              </div>
              <div class="card-body">
                {{ $news_category_count }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total News</h4>
              </div>
              <div class="card-body">
                {{ $news_count }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
              <i class="far fa-file"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Team Members</h4>
              </div>
              <div class="card-body">
                {{ $team_count }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-th-large"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Portfolios</h4>
              </div>
              <div class="card-body">
                {{ $portfolio_count }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-dark">
                <i class="far fa-comments"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Testimonials</h4>
              </div>
              <div class="card-body">
                {{ $testimonial_count }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-info">
                <i class="fas fa-sliders-h"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Sliders</h4>
              </div>
              <div class="card-body">
                {{ $slider_count }}
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
