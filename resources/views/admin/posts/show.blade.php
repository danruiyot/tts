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
    
  <div class="btn-group">
    <a href="{{ route("posts.create") }}" class="btn btn-success">Create</a>
    <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-warning">edit</a>
    <a href="{{ route("posts.index") }}" class="btn btn-dark">Back</a>

    <form action="{{ route('posts.destroy', $post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
      </form>
  </div>
  </div>
  <br>
    <table class="table table-striped table-inverse  table-bordered">
        <thead class="thead-inverse">
           
                <tr>
                <th>Name</th>
                <td>{{ $post->title }}</td>
                </tr>
                <tr>
                <th>Content</th>
                <td>{{ $post->content }}</td>
                </tr>

                <tr>
                  <th>image</th>
                  <td><img src="{{ asset("images/" .$post->image ) }}" alt="" width="36%" height="36%"></td>
                  </tr>
    </table>
        
</div>
@endsection
