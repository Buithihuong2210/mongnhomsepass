@extends('master.watchClient')
@section('main')
  <div class="container px-4 px-lg-5 mt-5">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Watch</h2>
      <h3 class="section-subheading text-muted" style="padding-bottom: 100px ">All Watch</h3>
    </div>
    <form class="actionBar" method="get" data-sort-by="product">
      <fieldset class="form-fieldset actionBar-section">
        <div class="form-field">
          <label class="form-label" for="sort" style="font-weight: bold">Sort By:</label>
          <select class="form-select form-select--small " name="sort" id="sort" role="listbox">
            <option value="alphaasc">A to Z</option>
            <option value="alphadesc">Z to A</option>
            <option value="priceasc">Price: Ascending</option>
            <option value="pricedesc">Price: Descending</option>
          </select>
        </div>
      </fieldset>
    </form>
    <br>
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
      @foreach($watchs_brands as $w)
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="{{asset('assets/img/watches/'.$w->image)}}"/>
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                <!-- Product name-->
                <h3 class="fw-bolder">{{$w->name}}</h3>
                <!-- Product price-->
                <h4 style="color: #cca000">{{number_format($w->price).' '.'$'}}</h4>
                <br>
                <div>Get it by <h6>Wednesday, June 28</h6>
                  FREE Delivery on first order.</div>
                <br>
                <br>
{{--                <a href="#" class="btn btn-default add-to-cart" style="color: #dda20a"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('client.details',['id' => $w->id])}}">View
                details</a></div>
            </div>
            <a href="#" class="btn btn-default add-to-cart" style="color: #dda20a"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
