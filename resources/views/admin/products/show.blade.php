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
    <a href="{{ route("products.create") }}" class="btn btn-success">Create</a>
    <a href="{{ route('products.edit', $product->id)}}" class="btn btn-warning">edit</a>
    <a href="{{ route("products.index") }}" class="btn btn-dark">Back</a>

    <form action="{{ route('products.destroy', $product->id)}}" method="post">
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
                <td>{{ $product->name }}</td>
                </tr>
                <tr>
                <th>country</th>
                <td>{{ $product->country }}</td>
                </tr>
                <tr>
                <th>location</th>
                <td>{{ $product->location }}</td>
                </tr>
                <tr>
                <th>price</th>
                <td>{{ $product->price }}</td>
                </tr>
                <tr>
                <th>Description</th>
                <td>{!! $product->description !!}</td>
                </tr>
                <tr>
                <th>link</th>
                <td>{{ $product->link }}</td>
                </tr>

                <tr>
                  <th>image</th>
                  <td><img src="{{ asset("images/" .$product->image ) }}" alt="" width="36%"></td>
                  </tr>
    </table>
        
</div>
@endsection
