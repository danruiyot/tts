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

  <br>
  <div class="container">
      <div class="row mb-3">
          <div class="col-sm-1-12">
          <a href="{{ route("products.create") }}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true">&nbsp;</i> Create</a>
          </div>
          
      </div>
  </div>
    <table class="table table-striped table-inverse table-sm table-bordered">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>country</th>
                <th>location</th>
                <th>price</th>
                <th colspan="3">actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($products as $index => $product)

                <tr>
                <td scope="row">{{ $index+1 }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->country }}</td>
                <td>{{ $product->location }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id)}}" class="btn text-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                </td>
                <td>
                    <a href="{{ route('products.edit', $product->id)}}" class="btn text-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </td>
            <td>
                <form action="{{ route('products.destroy', $product->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn text-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </td>
                </tr>
                @endforeach
            </tbody>
    </table>
        
</div>
@endsection
