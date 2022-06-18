@extends('master.watchClient')
@section('main')
  <div class="text-center">
    <h2 class="section-heading text-uppercase">Services</h2>
    <h3 class="section-subheading text-muted">...</h3>
  </div>
  <div class="row text-center">
    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
      <h4 class="my-3">E-Commerce</h4>
      <p class="text-muted">..........</p>
    </div>

    <div class="col-lg-4 col-sm-6 mb-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
      <h4 class="my-3">Responsive Design</h4>
      <p class="text-muted">...</p>
    </div>
    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
      <h4 class="my-3">Web Security</h4>
      <p class="text-muted">.....</p>
    </div>
  </div>
  </div>
        <div class="container px-4 px-lg-5 mt-5">
          <div class="text-center">
            <h2 class="section-heading text-uppercase">..........</h2>
            <h3 class="section-subheading text-muted" style="padding-bottom: 100px ">...........</h3>
          </div>

          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
              <div class="card h-100">
                <!-- Product image-->
                <img class="card-img-top" src="{{asset('storage/watchs/CASIO-AE.jpg')}}
{{--).$watchs->image--}}
" />
                <!-- Product details-->
                <div class="card-body p-4">
                  <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Casio-AE</h5>
                    <!-- Product price-->
                    $40.00 - $80.00
                  </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('client.details')}}"#">View details</a></div>
                </div>
              </div>
            </div>
            <div class="col mb-5">
              <div class="card h-100">
                <!-- Sale badge-->
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                <!-- Product image-->
                <img class="card-img-top" src="{{asset('storage/watchs/ORIENT_RA.jpg')}}" alt="" />
                <!-- Product details-->
                <div class="card-body p-4">
                  <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Orient RA-AR0001S10B</h5>
                    <!-- Product reviews-->
                    <div class="d-flex justify-content-center small text-warning mb-2">
                      <div class="bi-star-fill"></div>
                      <div class="bi-star-fill"></div>
                      <div class="bi-star-fill"></div>
                      <div class="bi-star-fill"></div>
                      <div class="bi-star-fill"></div>
                    </div>
                    <!-- Product price-->
                    <span class="text-muted text-decoration-line-through">$20.00</span>
                    $18.00
                  </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('client.details')}}">View details</a></div>
                </div>
              </div>
            </div>
            <div class="col mb-5">
              <div class="card h-100">
                <!-- Sale badge-->
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                <!-- Product image-->
                <img class="card-img-top" src="{{asset('storage/watchs/CITIZEN_SUN.jpg')}}" alt="..." />
                <!-- Product details-->
                <div class="card-body p-4">
                  <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Citizen NH8393-05A</h5>
                    <!-- Product price-->
                    <span class="text-muted text-decoration-line-through">$50.00</span>
                    $25.00
                  </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('client.details')}}">View details</a></div>
                </div>
              </div>
            </div>
            <div class="col mb-5">
              <div class="card h-100">
                <!-- Product image-->
                <img class="card-img-top" src="{{asset('storage/watchs/CK_1.jpg')}}" alt="..." />
                <!-- Product details-->
                <div class="card-body p-4">
                  <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Calvin Klein K9H216C6</h5>
                    <!-- Product reviews-->
                    <div class="d-flex justify-content-center small text-warning mb-2">
                      <div class="bi-star-fill"></div>
                      <div class="bi-star-fill"></div>
                      <div class="bi-star-fill"></div>
                      <div class="bi-star-fill"></div>
                      <div class="bi-star-fill"></div>
                    </div>
                    <!-- Product price-->
                    $40.00
                  </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('client.details')}}">View details</a></div>
                </div>
              </div>
            </div>
            <div class="col mb-5">
              <div class="card h-100">
                <!-- Sale badge-->
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                <!-- Product image-->
                <img class="card-img-top" src="{{asset('storage/watchs/CASIO_2.jpg')}}" alt="..." />
                <!-- Product details-->
                <div class="card-body p-4">
                  <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Casio LTP-VT01GL-7BUDF</h5>
                    <!-- Product price-->
                    <span class="text-muted text-decoration-line-through">$50.00</span>
                    $25.00
                  </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('client.details')}}">View details</a></div>
                </div>
              </div>
            </div>
            <div class="col mb-5">
              <div class="card h-100">
                <!-- Product image-->
                <img class="card-img-top" src="{{asset('storage/watchs/Seiko-SFQ.jpg')}}" alt="..." />
                <!-- Product details-->
                <div class="card-body p-4">
                  <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Seiko SFQ800P1</h5>
                    <!-- Product price-->
                    $120.00 - $280.00
                  </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('client.details')}}">View details</a></div>
                </div>
              </div>
            </div>
            <div class="col mb-5">
              <div class="card h-100">
                <!-- Sale badge-->
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                <!-- Product image-->
                <img class="card-img-top" src="{{asset('storage/watchs/TISSOT.jpg')}}" alt="..." />
                <!-- Product details-->
                <div class="card-body p-4">
                  <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Tissot T050207.17.117.05</h5>
                    <!-- Product reviews-->
                    <div class="d-flex justify-content-center small text-warning mb-2">
                      <div class="bi-star-fill"></div>
                      <div class="bi-star-fill"></div>
                      <div class="bi-star-fill"></div>
                      <div class="bi-star-fill"></div>
                      <div class="bi-star-fill"></div>
                    </div>
                    <!-- Product price-->
                    <span class="text-muted text-decoration-line-through">$20.00</span>
                    $18.00
                  </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('client.details')}}">View details</a></div>
                </div>
              </div>
            </div>
            <div class="col mb-5">
              <div class="card h-100">
                <!-- Product image-->
                <img class="card-img-top" src="{{asset('storage/watchs/BA-1.jpg')}}" alt="..." />
                <!-- Product details-->
                <div class="card-body p-4">
                  <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Baby-G BA-110RG-7ADR</h5>
                    <!-- Product reviews-->
                    <div class="d-flex justify-content-center small text-warning mb-2">
                      <div class="bi-star-fill"></div>
                      <div class="bi-star-fill"></div>
                      <div class="bi-star-fill"></div>
                      <div class="bi-star-fill"></div>
                      <div class="bi-star-fill"></div>
                    </div>
                    <!-- Product price-->
                    $40.00
                  </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('client.details')}}">View details</a></div>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection
