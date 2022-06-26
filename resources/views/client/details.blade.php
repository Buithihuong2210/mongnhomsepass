@extends('master.clientdetailsMaster')

@section('main')
  <div class="container">
    <div class="card">
      <div class="container-fliud">
        <div class="wrapper row">
          <div class="preview col-md-6">
            @foreach($watchs_details as $w)
            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="{{asset('assets/img/watches/'.$w->image)}}" /></div>
              <div class="tab-pane" id="pic-2"><img src="{{asset('assets/img/watches/'.$w->image)}}" /></div>
              <div class="tab-pane" id="pic-3"><img src="{{asset('assets/img/watches/'.$w->image)}}"/></div>
              <div class="tab-pane" id="pic-4"><img src="{{asset('assets/img/watches/'.$w->image)}}" /></div>
              <div class="tab-pane" id="pic-5"><img src="{{asset('assets/img/watches/'.$w->image)}}" /></div>
            </div>
{{--            <ul class="preview-thumbnail nav nav-tabs">--}}
{{--              <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{asset('assets/img/watches/'.$w->image)}}"/></a></li>--}}
{{--              <li><a data-target="#pic-2" data-toggle="tab"><img src="{{asset('assets/img/watches/'.$w->image)}}" /></a></li>--}}
{{--              <li><a data-target="#pic-3" data-toggle="tab"><img src="{{asset('assets/img/watches/'.$w->image)}}" /></a></li>--}}
{{--              <li><a data-target="#pic-4" data-toggle="tab"><img src="{{asset('assets/img/watches/'.$w->image)}}" /></a></li>--}}
{{--              <li><a data-target="#pic-5" data-toggle="tab"><img src="{{asset('assets/img/watches/'.$w->image)}}" /></a></li>--}}
{{--            </ul>--}}

          </div>
          <div class="details col-md-6">
            <h3 class="product-title">{{$w->name}}</h3>
            <h4 class="product-description">Description: <span style="text-transform: none;"> {{$w->description}}</span> </h4>
            <h4 class="product-description">Material: <span style="text-transform: none;"> {{$w->material}}</span> </h4>
            <h4 class="price">Price: <span>{{number_format($w->price).' '.'$'}}</span></h4>
            <h5 class="sizes">sizes:
              <span class="size" data-toggle="tooltip" title="small">26</span>
{{--              <span class="size" data-toggle="tooltip" title="medium">27</span>--}}
{{--              <span class="size" data-toggle="tooltip" title="large">28</span>--}}
{{--              <span class="size" data-toggle="tooltip" title="xtra large">29</span>--}}
{{--              <span class="size" data-toggle="tooltip" title="xtra large">30</span>--}}
            </h5>
            <h5 class="colors">Color:<span> {{$w->size}}</span>
{{--              <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>--}}
{{--              <span class="color green"></span>--}}
{{--              <span class="color blue"></span>--}}
            </h5>

            <div class="action">
              <button class="add-to-cart btn btn-default" type="button">add to cart</button>
              <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
            </div>
          </div>
        </div>

        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
