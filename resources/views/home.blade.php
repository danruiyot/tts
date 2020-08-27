@extends('layouts.app')

@section('content')
<div class="container">
    
    <section>
    <div class="container">
        <div class="row">
            @foreach ($ads as $ad)
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('/images/'.$ad->image )}}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $ad->ad_name }}</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>
</section>
<hr>
<section>
    

    <div class="section-header align-center mb-4 align-content-center">
        <h2 class="h2">Popular destinations around the world</h2>
        <div class="section-header__stars mb-3"><i class="fa fa-star"></i><i class="fa fa-star center"></i><i class="fa fa-star"></i></div>
        <p class="fz-norm mb-0"><em>The best choice of hotels we have</em></p>
      </div>

    <div class="container">
        <div class="row">
            @foreach ($products as $prod)
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('/images/'.$prod->image )}}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{$prod->name}}</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>
</section>
<hr>
<section>
    <div class="container">
        <div class="row">
            @foreach ($events as $ev)
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('/images/'.$ev->image )}}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $ev->title}}</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>
</section>

<hr>
<section>
    <div class="container">
        <div class="row">
            @foreach ($offers as $off)
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('/images/'.$off->image )}}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $off->title }}</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>
</section>

<hr>

</div>
@endsection
