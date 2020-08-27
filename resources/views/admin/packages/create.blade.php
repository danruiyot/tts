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
<form action="{{ route('packages.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">note</label>
          <input type="text" name="note" id="note" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">destinations</label>
          <input type="text" name="destinations" id="destinations" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">highlights</label>
          <input type="text" name="highlights" id="highlights" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">where to stay</label>
          <input type="text" name="where_stay" id="where_stay" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">travel style</label>
          <input type="text" name="travel_style" id="travel_style" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">age range</label>
          <input type="text" name="age_range" id="age_range" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">number of days</label>
          <input type="text" name="number_of_days" id="number_of_days" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">price</label>
          <input type="number" name="price" id="price" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">What is included</label>
          <input type="text" name="what_included" id="what_included" class="form-control" placeholder="" aria-describedby="helpId">
        </div>


        <div class="form- mt-3 mb-3 m-2">
          <div class="row">
            <div class="col-sm-6">
              <span>Image</span>
            </div>

            <div class="col-sm-4 d-flex justify-content-between">
              

					<div class="form-group d-flex justify-content-between">
						<span class="product-images">
							<!-- product images and hidden fields -->
							<!-- dynamically added after  -->
						</span>

					</div><!-- end .form-group -->
            </div>
            <div class="col-sm-2">

						<button type="button" data-toggle="modal" data-target="#media-modal" class="btn btn-sm btn-secondary opens">
							Upload Images
						</button>
            </div>
          </div>
        </div>


        <br>
          <div class="form-group">
            <input type="submit" value="save" class="btn btn-success">
          </div>
        </form>
</div>
@endsection
