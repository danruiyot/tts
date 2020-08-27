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
    <a href="{{ route("packages.create") }}" class="btn btn-success">Create</a>
    <a href="{{ route('packages.edit', $package->id)}}" class="btn btn-warning">edit</a>
    <a href="{{ route("packages.index") }}" class="btn btn-dark">Back</a>

    <form action="{{ route('packages.destroy', $package->id)}}" method="post">
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
                <th>Title</th>
                <td>{{ $package->title }}</td>

                </tr>
                <tr>
                <th>note</th>
                <td>{{ $package->note }}</td>
                </tr>
                <tr>
                <th>Hihlights</th>
                <td>{{ $package->highlights }}</td>
                </tr>
                <tr>
                <th>where to stay</th>
                <td>{{ $package->where_stay }}</td>
              </tr>
              <tr>
                <th>link</th>
                <td>{{ $package->travel_style }}</td>
              </tr>
              <tr>
                <th>Age ranger</th>
                <td>{{ $package->age_range }}</td>
              </tr>
              <tr>
                <th>Number of days</th>
                <td>{{ $package->number_of_days }}</td>
              </tr>
              <tr>
                <th>What is included</th>
                <td>{{ $package->what_included }}</td>
              </tr>
              <tr>
                <th>Travel_style</th>
                <td>{{ $package->travel_style }}</td>
              </tr>
              <tr>
                <th>price</th>
                <td>{{ $package->price }}</td>
              </tr>

              <tr>
                <th>image</th>
                <td><img src="{{ asset("images/" .$package->image ) }}" alt="" width="36%" height="36%"></td>
                </tr>
    </table>
     
    
    
    
    
</div>
@endsection
