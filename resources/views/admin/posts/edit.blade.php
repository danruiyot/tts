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
<form action="{{ route('posts.update', $post->id ) }}" method="post">
        @csrf
        <div class="form-group">
          <label for="">Title</label>
          <input type="text" name="title" id="title" value="{{ $post->title }}" class="form-control" placeholder="" aria-describedby="helpId">
          
        </div>

        <div class="form-group">
          <label for="">image</label>

          <span class="product-images">
            <div class="product-img hideme">
            <input type="hidden" name="image" value="{{ $post->image}}">
            <img src="{{ asset("images/" .$post->image ) }}" />
            <a href="#" class="btn btn-xs text-danger remove">
          <span class="fa fa-trash"></span></a>
          </div>
        </span>
						<button type="button" data-toggle="modal" data-target="#media-modal" class="btn btn-sm btn-secondary opens">
							Upload Images
						</button>
        </div>
        <div class="form-group">
          <textarea name="content" id="description" class="form-control" >
              {{ $post->content }}
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
