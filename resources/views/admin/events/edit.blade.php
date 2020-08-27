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

<form action="{{ route('events.update', $event->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="">title</label>
          <input type="text" name="title" id="title" value="{{ $event->title }}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">venue</label>
          <input type="text" name="venue" id="venue" value="{{ $event->venue }}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">price</label>
          <input type="number" name="price" id="price" value="{{ $event->price }}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Location</label>
          <input type="text" name="location" id="location" value="{{ $event->location }}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">starts</label>
          <input type="date" name="starts" id="starts" value="{{ $event->starts }}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">ends</label>
          <input type="date" name="ends" id="ends" value="{{ $event->ends }}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Country</label>
          <input type="text" name="country" id="country" value="{{ $event->country }}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <textarea name="description" id="description" class="form-control" >
            {{ $event->description }}
          </textarea>
        </div>

        <div class="form-group">
          <label for="">image</label>

          <span class="product-images">
            <div class="product-img hideme">
            <input type="hidden" name="image" value="{{ $event->image}}">
            <img src="{{ asset("images/" .$event->image ) }}" />
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
