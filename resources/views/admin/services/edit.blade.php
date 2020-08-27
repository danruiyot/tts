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

<form action="{{ route('services.update', $service->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="service_name" value="{{ $service->service_name}}" id="service_name" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Location</label>
          <input type="text" name="icon" value="{{ $service->icon}}" id="icon" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Services</label>
          <input type="text" name="services[]" value="{{ $service->services}}" id="services" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

          <br>
          <div class="form-group">
            <input type="submit" value="update" class="btn btn-success">
          </div>
        </form>
</div>
@endsection
