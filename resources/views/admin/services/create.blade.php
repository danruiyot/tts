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
    <a href="{{ route("services.index") }}" class="btn btn-dark">Back</a>
  </div>
<form action="{{ route('services.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="">service name</label>
          <input type="text" name="service_name" id="service_name" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">icon</label>
          <input type="text" name="icon" id="icon" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">service</label>
          <input type="text" name="services" id="services" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

          <br>
          <div class="form-group">
            <input type="submit" value="save" class="btn btn-success">
          </div>
        </form>
</div>
@endsection
