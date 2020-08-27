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
    <a href="{{ route("products.index") }}" class="btn btn-dark">Back</a>
  </div>

<form action="{{ route('products.update', $product->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" value="{{ $product->name}}" id="name" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Location</label>
          <input type="text" name="location" value="{{ $product->location}}" id="location" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">price</label>
          <input type="number" name="price" value="{{ $product->price}}" id="price" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Country</label>
          <input type="text" name="country" value="{{ $product->country}}" id="country" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="link">link</label>
            <input type="url" name="link" value="{{ $product->link}}" id="link" class="form-control" placeholder="" aria-describedby="helpId">
          </div>

          <div class="form-group">
            <textarea name="description"  id="description" class="form-control" >
              {{ $product->description }}
            </textarea>
          </div>

        <div class="form-group">
          <label for="">image</label>

          <span class="product-images">
            <div class="product-img hideme">
            <input type="hidden" name="image" value="{{ $product->image}}">
            <img src="{{ asset("images/" .$product->image ) }}" />
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
