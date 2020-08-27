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
  <div class="mt-3 mb-3">
    <a href="{{ route("packages.index") }}" class="btn btn-dark">Back</a>
  </div>

<form action="{{ route('packages.update', $package->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="title" id="title" value="{{ $package->title }}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">note</label>
          <input type="text" name="note" id="note" value="{{ $package->note }}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">destinations</label>
          <input type="text" name="destinations" value="{{ $package->destinations }}" id="destinations" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">highlights</label>
          <input type="text" name="highlights" value="{{ $package->highlights }}" id="highlights" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">where to stay</label>
          <input type="text" name="where_stay" value="{{ $package->where_stay }}" id="where_stay" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">travel style</label>
          <input type="text" name="travel_style" value="{{ $package->travel_style }}" id="travel_style" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">age range</label>
          <input type="text" name="age_range" value="{{ $package->age_range }}" id="age_range" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">number of days</label>
          <input type="text" name="number_of_days" value="{{ $package->number_of_days }}" id="number_of_days" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">price</label>
          <input type="text" name="price" id="price" value="{{ $package->price }}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">What is included</label>
          <input type="text" name="what_included" value="{{ $package->what_included }}" id="what_included" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">image</label>

          <span class="product-images">
            <div class="product-img hideme">
            <input type="hidden" name="image" value="{{ $package->image}}">
            <img src="{{ asset("images/" .$package->image ) }}" />
            <a href="#" class="btn btn-xs text-danger remove">
          <span class="fa fa-trash"></span></a>
          </div>
        </span>
						<button type="button" data-toggle="modal" data-target="#media-modal" class="btn btn-sm btn-secondary opens">
							Upload Images
						</button>
        </div>
          <br>
          <div class="form-group">
            <input type="submit" value="update" class="btn btn-success">
          </div>
        </form>
</div>
@endsection
