@extends('layouts.admin')

@section('content')
<div class="container">

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div><br />
  @endif

  <br>
  <div class="container">

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-3">
          <div class="card-counter primary">
            <i class="fa fa-users"></i>
            <span class="count-numbers">12</span>
            <span class="count-name">Clients</span>
          </div>
        </div>
        <div class="col-sm-12 col-md-3">
          <div class="card-counter success">
            <i class="fa fa-camera"></i>
            <span class="count-numbers">{{ $events }}</span>
            <span class="count-name">Events</span>
          </div>
        </div>
        <div class="col-sm-12 col-md-3">
          <div class="card-counter info">
            <i class="fa fa-binoculars"></i>
            <span class="count-numbers">{{ $packages }}</span>
            <span class="count-name">Packages</span>
          </div>
        </div>
        <div class="col-sm-12 col-md-3">
          <div class="card-counter danger">
            <i class="fa fa-birthday-cake"></i>
            <span class="count-numbers">12</span>
            <span class="count-name">Birthdays</span>
          </div>
        </div>
        
      </div>
    </div>
      
    <div class="mt-5 mb-5">

      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            
            <div class="card text-left">
              <div class="card-header">
                Members birthdays
              </div>
              <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Today
                    <span class="badge badge-primary badge-pill">12</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Tommorow
                    <span class="badge badge-primary badge-pill">50</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Within next 7 days
                    <span class="badge badge-primary badge-pill">99</span>
                  </li>
                </ul> 
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-6">
            <div class="card text-left">
              <div class="card-header">
                 Tours
              </div>
              <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Today
                    <span class="badge badge-secondary badge-pill">12</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Within next 7 days
                    <span class="badge badge-secondary badge-pill">99</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    This month
                    <span class="badge badge-secondary badge-pill">50</span>
                  </li>
                </ul> 
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
</div>
</div>
@endsection
