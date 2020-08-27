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
    <a href="{{ route("offers.index") }}" class="btn btn-dark">Back</a>
  </div>

<form action="{{ route('offers.update', $offer->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="">title</label>
          <input type="text" name="title" value="{{ $offer->title}}" id="ad_name" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">starts</label>
          <input type="date" name="starts" value="{{ $offer->starts}}" id="starts" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="link">ends</label>
            <input type="date" name="ends" value="{{ $offer->ends}}" id="ends" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
        <div class="form-group">
          <label for="">price</label>
          <input type="number" name="price" value="{{ $offer->price}}" id="price" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <textarea name="description"  id="description" class="form-control" >
            {{ $offer->description }}
          </textarea>
        </div>

        <div class="form-group">
          <label for="">image</label>

          <span class="product-images">
            <div class="product-img hideme">
            <input type="hidden" name="image" value="{{ $offer->image}}">
            <img src="{{ asset("images/" .$offer->image ) }}" />
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
