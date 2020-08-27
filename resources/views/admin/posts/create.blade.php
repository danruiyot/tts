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
    <a href="{{ route("posts.index") }}" class="btn btn-dark">Back</a>
  </div>
<form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="">Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
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
          <textarea name="content" id="description" class="form-control" >
          </textarea>
        </div>
        <input type="text" name="post_type" hidden value="1">

          <br>
          <div class="form-group">
            <input type="submit" value="save" class="btn btn-success">
          </div>
        </form>
</div>
@endsection
