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
<div class="mt-5">

 <!-- Button trigger modal -->
 <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modelId">
    <span class="fa fa-plus">&nbsp;</span>Add
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Media Upload</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
              </div>
              <form action="{{route('media.store')}}" method="post" enctype="multipart/form-data">
                <h3 class="text-center mb-5">Media upload</h3>
                  @csrf
              <div class="modal-body">
         
                      
          
                      <div class="custom-file">
                          <label class="custom-file-label" for="chooseFile">Select file</label>
                          <input type="file" name="file[]" class="custom-file-input" id="file" multiple="">
                      </div>
          
               
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
      </div>
  </div>
 <div class="mt-2">
    <div class="row">
      @if (isset($filez) && $filez != null)
      @php
      $counts = 1;
      @endphp
        @foreach ($filez as $index => $file)

        {{-- {{ $counts }} --}}
            <div class="col-sm-6 col-md-4">
              <div class="card image-card mt-2">
                <img class="media-image" src="{{ asset('images/'. $file->name ) }}" alt="{{ $file->name }}" width="100%">
                <div class="middle">
                <div class="text">
                  <form action="{{ route('media.destroy', $file->id)}}" class="image" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn text-danger" type="submit"><i class="fa fa-trash text-card" aria-hidden="true"></i></button>
                  </form>
                </div>
                </div>
              </div>
        </div>
        @php
        $counts ++;

        if ($counts > 3) {
          # code...
          $counts = 1;
        }
        @endphp

        @endforeach
        @else

        <form action="{{route('media.store')}}" method="post" enctype="multipart/form-data">
          <h3 class="text-center mb-5">Media upload</h3>
            @csrf
        <div class="modal-body">
   
                
    
                <div class="custom-file">
                    <label class="custom-file-label" for="chooseFile">Select file</label>
                    <input type="file" name="file[]" class="custom-file-input" id="file" multiple="">
                </div>
    
         
        </div>
        <button type="submit" class="btn btn-primary">upload</button>
      </form>
        @endif

      </div>
 </div>
</div>
</div>
@endsection
