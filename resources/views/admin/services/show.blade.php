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
    <a href="{{ route("services.create") }}" class="btn btn-success">Create</a>
    <a href="{{ route('services.edit', $service->id)}}" class="btn btn-warning">edit</a>
    <a href="{{ route("services.index") }}" class="btn btn-dark">Back</a>

    <form action="{{ route('services.destroy', $service->id)}}" method="post">
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
                <td>{{ $service->service_name }}</td>
                </tr>
                <tr>
                <th>icon</th>
                <td>{{ $service->icon }}</td>
                </tr>
              <tr>
                <th>services</th>
                <td>{{ $service->services }}</td>
                </tr>
    </table>
        
</div>
@endsection
