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
    <a href="{{ route("events.index") }}" class="btn btn-dark">Back</a>
  </div>
<form action="{{ route('events.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="">title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">venue</label>
          <input type="text" name="venue" id="venue" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">price</label>
          <input type="number" name="price" id="price" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Location</label>
          <input type="text" name="location" id="location" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">starts</label>
          <input type="date" name="starts" id="starts" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">ends</label>
          <input type="date" name="ends" id="ends" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Country</label>
          <input type="text" name="country" id="country" class="form-control" placeholder="" aria-describedby="helpId">
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

        <div class="form-group">
          <textarea name="description" id="description" class="form-control" >
          </textarea>
        </div>

          <br>
          <div class="form-group">
            <input type="submit" value="save" class="btn btn-success">
          </div>
        </form>
</div>
@endsection
