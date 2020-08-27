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
          <a href="{{ route("events.create") }}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true">&nbsp;</i> Create</a>
          </div>
          
      </div>
  </div>
    <table class="table table-striped table-inverse table-sm table-bordered">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>title</th>
                <th>venue</th>
                <th>location</th>
                <th>country</th>
                <th>price</th>
                <th>starts</th>
                <th>ends</th>
                <th colspan="3">actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($events as $index => $event)

                <tr>
                <td scope="row">{{ $index+1 }}</td>
                <td>{{ $event->title }}</td>
                <td>{{ $event->venue }}</td>
                <td>{{ $event->location }}</td>
                <td>{{ $event->country }}</td>
                <td>{{ $event->price }}</td>
                <td>{{ $event->starts }}</td>
                <td>{{ $event->ends }}</td>
                <td>
                    <a href="{{ route('events.show', $event->id)}}" class="btn text-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                </td>
                <td>
                    <a href="{{ route('events.edit', $event->id)}}" class="btn text-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </td>
            <td>
                <form action="{{ route('events.destroy', $event->id)}}" method="post">
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
