@extends('master.watchClient')
@section('main')
  <div class="text-center">
    <h1 class="section-heading text-uppercase">Services</h1>
    <h3 class="section-subheading text-muted">Contact us to receive a voucher</h3>
  </div>
  <br>
  <br>
  <div class="row text-center">
    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
      <h4 class="my-3">E-Commerce</h4>
      <p class="text-muted">Guaranteed genuine, 20 times refund if Fake</p>
    </div>

    <div class="col-lg-4 col-sm-6 mb-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
      <h4 class="my-3">Responsive Design</h4>
      <p class="text-muted">Luxury design, High quality materials, Durable machine</p>
    </div>
    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
      <h4 class="my-3">Web Security</h4>
      <p class="text-muted">All customer information on the website will be encrypted for security</p>
    </div>
  </div>
  </div>
  <div class="container px-4 px-lg-5 mt-5">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Watch</h2>
      <h3 class="section-subheading text-muted" style="padding-bottom: 100px ">HIGHLIGHTS PRODUCTS</h3>
    </div>
    <div class ="row">
      <div class="col-md-4">
        <form class="actionBar" method="get" data-sort-by="product">
          @csrf
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
      </div>
    </div>

    <br>
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

     @foreach($watchs as $w)

      <div class="col mb-5">
        <div class="card h-100">
          <!-- Product image-->
          <img class="card-img-top" src="{{asset('assets/img/watches/'.$w->image)}}
{{--).$watchs->image--}}
"/>
          <!-- Product details-->
          <div class="card-body p-4">
            <div class="text-center">
              <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
              <!-- Product name-->
              <h3 class="fw-bolder">{{$w->name}}</h3>
              <!-- Product price-->
             <h4 style="color: #cca000">{{number_format($w->price).' '.'$'}}</h4>
              <br>
{{--              {{$w->size}}--}}
              <div>Get it by <h6>Wednesday, June 28</h6>
                FREE Delivery on first order.</div>
              <br>
              <br>
{{--              <a href="#" class="btn btn-default add-to-cart" style="color: #dda20a"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('client.details', ['id' => $w->id])}}">View
              details</a></div>
          </div>
          <a href="#" class="btn btn-default add-to-cart" style="color: #dda20a"><i class="fa fa-shopping-cart"></i>Add to cart</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection
