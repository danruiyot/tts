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
          <a href="{{ route("posts.create") }}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true">&nbsp;</i> Create</a>
          </div>
          
      </div>
  </div>
    <table class="table table-striped table-inverse table-sm  table-bordered">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>title</th>
                <th colspan="3">actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($posts as $index => $post)

                <tr>
                <td scope="row">{{ $index+1 }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="{{ route('posts.show', $post->id)}}" class="btn text-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                </td>
                <td>
                    <a href="{{ route('posts.edit', $post->id)}}" class="btn text-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </td>
            <td>
                <form action="{{ route('posts.destroy', $post->id)}}" method="post">
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
