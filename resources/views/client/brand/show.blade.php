@extends('master.watchClient')
@section('main')
  <div class="container px-4 px-lg-5 mt-5">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Brand</h2>
      <h3 class="section-subheading text-muted" style="padding-bottom: 100px ">All Watch Of Brand</h3>
    </div>

    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
      @foreach($watchs as $w)
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="{{asset('assets/img/watches/'.$w->image)}}"/>
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">{{$w->name}}</h5>
                <!-- Product price-->
                {{number_format($w->price).' '.'$'}}
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('client.details')}}">View
                details</a></div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection