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
    <a href="{{ route("offers.create") }}" class="btn btn-success">Create</a>
    <a href="{{ route('offers.edit', $offer->id)}}" class="btn btn-warning">edit</a>
    <a href="{{ route("offers.index") }}" class="btn btn-dark">Back</a>

    <form action="{{ route('ads.destroy', $offer->id)}}" method="post">
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
                <td>{{ $offer->title }}</td>
                </tr>
                <tr>
                <th>description</th>
                <td>{!! $offer->description !!}</td>
                </tr>
                <tr>
                <th>price</th>
                <td>{{ $offer->price }}</td>
              </tr>
                <tr>
                <th>starts</th>
                <td>{{ $offer->starts }}</td>
                </tr>
              <tr>
                <th>ends</th>
                <td>{{ $offer->ends }}</td>
                </tr>

                <tr>
                  <th>image</th>
                  <td><img src="{{ asset("images/" .$event->image ) }}" alt="" width="36%" height="36%"></td>
                  </tr>
    </table>
        
</div>
@endsection
