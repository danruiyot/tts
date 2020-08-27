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
          <a href="{{ route("packages.create") }}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true">&nbsp;</i> Create</a>
          </div>
          
      </div>
  </div>
    <table class="table table-striped table-inverse table-sm table-bordered">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>note</th>
                <th>destination</th>
                <th>price</th>
                <th colspan="3">actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($packages as $index => $package)

                <tr>
                <td scope="row">{{ $index+1 }}</td>
                <td>{{ $package->title }}</td>
                <td>{{ $package->note }}</td>
                <td>{{ $package->destinations }}</td>
                <td>{{ $package->price }}</td>
                <td>
                    <a href="{{ route('packages.show', $package->id)}}" class="btn text-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                </td>
                <td>
                    <a href="{{ route('packages.edit', $package->id)}}" class="btn text-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </td>
            <td>
                <form action="{{ route('packages.destroy', $package->id)}}" method="post">
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
