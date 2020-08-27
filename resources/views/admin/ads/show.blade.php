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
    <a href="{{ route("ads.create") }}" class="btn btn-success">Create</a>
    <a href="{{ route('ads.edit', $ad->id)}}" class="btn btn-warning">edit</a>
    <a href="{{ route("ads.index") }}" class="btn btn-dark">Back</a>

    <form action="{{ route('ads.destroy', $ad->id)}}" method="post">
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
                <td>{{ $ad->ad_name }}</td>
                </tr>
                <tr>
                <th>country</th>
                <td>{{ $ad->country }}</td>
                </tr>
                <tr>
                <th>location</th>
                <td>{{ $ad->location }}</td>
                </tr>
                <tr>
                <th>price</th>
                <td>{{ $ad->price }}</td>
              </tr>
              <tr>
                <th>link</th>
                <td>{{ $ad->link }}</td>
                </tr>

                <tr>
                  <th>image</th>
                  <td><img src="{{ asset("images/" .$ad->image ) }}" alt="" width="36%" height="36%"></td>
                  </tr>
    </table>
        
</div>
@endsection
