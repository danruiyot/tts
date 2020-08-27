<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title style="text-transform: capitalize;">{{ $title ?? Request::segment(1) }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}" ></script>
    <script src="{{ asset('js/jodit.min.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jodit.min.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand justify-content-between navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">{{ config('app.name', 'Laravel') }}</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <ul class="navbar-nav px-3">
    @guest
@else
    <li class="nav-item dropdown text-nowrap">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
@endguest
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item {{ Request::segment(1) === 'dashboard' ? 'active' : '' }}">
            <a class="nav-link " href="{{ route("dashboard.index") }}">
              <span class="fa fa-dashboard"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item {{ Request::segment(1) === 'products' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route("products.index") }}">
              <i class="fa fa-tag" aria-hidden="true"></i>
              Products
            </a>
          </li>
          <li class="nav-item {{ Request::segment(1) === 'services' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route("services.index") }}">
              <i class="fa fa-server" aria-hidden="true"></i>
              Services
            </a>
          </li>
          <li class="nav-item {{ Request::segment(1) === 'posts' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route("posts.index") }}">
              <i class="fa fa-venus" aria-hidden="true"></i>
              Posts
            </a>
          </li>
          <li class="nav-item {{ Request::segment(1) === 'packages' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route("packages.index") }}">
              <i class="fa fa-binoculars" aria-hidden="true"></i>
              Tour packages
            </a>
          </li>
          <li class="nav-item {{ Request::segment(1) === 'events' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route("events.index") }}">
              <i class="fa fa-camera-retro" aria-hidden="true"></i>
              Events
            </a>
          </li>
          <li class="nav-item {{ Request::segment(1) === 'ads' ? 'active' : '' }} ">
          <a class="nav-link" href="{{ route("ads.index") }}">
              <i class="fa fa-id-card" aria-hidden="true"></i>
              Advertisements
            </a>
          </li>


          <li class="nav-item {{ Request::segment(1) === 'media' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route("media.index") }}">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
                Media
              </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>reports</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">

          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-calendar" aria-hidden="true"></i>
              Today
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
              Current week
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-calendar-times-o" aria-hidden="true"></i>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-calendar-o" aria-hidden="true"></i>
              Current Year
            </a>
          </li>
        </ul>


        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Others</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item {{ Request::segment(1) === 'discounts' ? 'active' : '' }} ">
            <a class="nav-link" href="#">
              <i class="fa fa-money" aria-hidden="true"></i>
              Discouncts
            </a>
          </li>
{{-- {{ route("discounts.index") }} --}}
          <li class="nav-item {{ Request::segment(1) === 'offers' ? 'active' : '' }} ">
            <a class="nav-link" href="{{ route("offers.index") }}">
              <i class="fa fa-dollar" aria-hidden="true"></i>
                Offers
            </a>
          </li>
          
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Users</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">

          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-users" aria-hidden="true"></i>
              Clients
            </a>
          </li>

        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
        
            @if(session()->get('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}  
            </div><br />
          @endif
          
            <div class="container card">
                @yield('content')
            </div>
        </main>
  </div>
</div>



<div id="media-modal" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Media menager</h4>
        <br>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
          <div class="" id="librayr">
        <div>
            @isset($files)
                
              @foreach ($files as $file)
          <a href="#" data-image-id="{{ $file->name }}">
                <img class="img" src="{{ asset('images/'. $file->name ) }}" alt="{{ $file->name }}" width="100%">
                <input type="checkbox" name="images-check" class="checkboxes">
              </a>        
            @endforeach
            @endisset
            
          </div>
            <div class="clearfix"></div>
            <!-- insert button -->
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-info insert" data-dismiss="modal">Insert</button>
          </div>
        </div><!-- end .library -->
      </div>
    </div><!-- end .modal-content -->
  </div><!-- end .modal-dialog -->
</div><!-- end .modal -->

<script src="{{ asset('js/script.js') }}" ></script>

<script>
 $(document).ready(function(){
  $(".alert").fadeOut(4000);

  $('textarea').each(function () {
    var editor = new Jodit(this);
});

});
  </script>
  </body>
</html>