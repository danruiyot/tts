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
    <a href="{{ route("events.create") }}" class="btn btn-success">Create</a>
    <a href="{{ route('events.edit', $event->id)}}" class="btn btn-warning">edit</a>
    <a href="{{ route("events.index") }}" class="btn btn-dark">Back</a>

    <form action="{{ route('events.destroy', $event->id)}}" method="post">
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
                <td>{{ $event->title }}</td>
                </tr>
                <tr>
                <th>Venue</th>
                <td>{{ $event->venue }}</td>
                </tr>
                <tr>
                <th>price</th>
                <td>{{ $event->price }}</td>
                </tr>
                <tr>
                <th>location</th>
                <td>{{ $event->location }}</td>
                </tr>
                <tr>
                <th>country</th>
                <td>{{ $event->country }}</td>
                </tr>
                <tr>
                <th>price</th>
                <td>{{ $event->price }}</td>
              </tr>
              <tr>
                <th>start</th>
                <td>{{ $event->starts }}</td>
                </tr>
                <tr>
                  <th>end</th>
                  <td>{{ $event->ends }}</td>
                  </tr>

                <tr>
                  <th>image</th>
                  <td><img src="{{ asset("images/" .$event->image ) }}" alt="" width="36%" height="36%"></td>
                  </tr>
    </table>

</div>
@endsection
