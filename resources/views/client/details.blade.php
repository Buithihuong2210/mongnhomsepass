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
          <div class="details col-md-6" >
            <h1 class="product-title" style=" text-align: center; color: black  " >{{$w->name}}</h1>
            <h1 class="price" style=" text-align: center; color: #dda20a"> <span>{{number_format($w->price).' '.'$'}}</span></h1>
            <hr>

            <h4 class="product-descriptions" style="font-size: 1.5rem">Description: <span style="text-transform: none;"> {{$w->description}}</span> </h4>
            <hr>
            <br>
            <h4 class="product-description">Material: <span style="text-transform: none;"> {{$w->material}}</span> </h4>
            <br>

            <h4 class="sizes">Sizes:<span> {{$w->size}}</span>
{{--              <span class="size" data-toggle="tooltip" title="small">26</span>--}}
{{--              <span class="size" data-toggle="tooltip" title="medium">27</span>--}}
{{--              <span class="size" data-toggle="tooltip" title="large">28</span>--}}
{{--              <span class="size" data-toggle="tooltip" title="xtra large">29</span>--}}
{{--              <span class="size" data-toggle="tooltip" title="xtra large">30</span>--}}
            </h4>
            <br>
            <h4 class="colors" >Color: <span> {{$w->color}}</span>

            </h4>
            <div class="sizes">
              <h4>QUANTITY</h4>
              <input type="number" class="form- control text-center w-100" value="1" style="height: 2.75rem; font-size: 15px">
            </div>
            <hr>
            <div class="col-lg-12">
              <p class ="tag-section" style="font-size: 18px; color: black; margin-right: 6px;">
                <strong> Tag: </strong>
                <a href> Woman</a>
                <a href>, Man</a>
                <a href>, Children</a>
              </p>
            </div>
            <br>
            <div class="rating">
              <div class="stars"  style="font-size: large">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <br>
              <p class="vote" style="font-size: 1.75rem"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
              <span class="review-no"  style="font-size: large">41 reviews</span>
            </div>

            <div class="action" style=" text-align: center">
              <button class="add-to-cart btn btn-default" type="button" style="font-size: large; font-weight: 700; color: #dda20a">Add to product favorites</button>
              <button class="like btn btn-default" type="button"><span class="fa fa-heart" style="font-size: large; color:red;"></span></button>
            </div>
          </div>
        </div>

        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
