<dl class="row">
{{--  <dt class="col-sm-3">ID</dt>--}}
{{--  <dd class="col-sm-9">{{ $watchs->id }}</dd>--}}

  <dt class="col-sm-3">Name</dt>
  <dd class="col-sm-9">{{ $watchs->name }}</dd>

  <dt class="col-sm-3">Visible</dt>
  <dd class="col-sm-9">{{ $watchs->visible }}</dd>

  <dt class="col-sm-3">Price($)</dt>
  <dd class="col-sm-9">{{ $watchs->price }}</dd>

  <dt class="col-sm-3">Size</dt>
  <dd class="col-sm-9">{{$watchs->size }}</dd>

  <dt class="col-sm-3">Material</dt>
  <dd class="col-sm-9">{{$watchs->material }}</dd>

  <dt class="col-sm-3">Color</dt>
  <dd class="col-sm-9">{{$watchs->color }}</dd>

  <dt class="col-sm-3">Description</dt>
  <dd class="col-sm-9">{{$watchs->description }}</dd>

  <dt class="col-sm-3">Image</dt>
  <dd class="col-sm-9">
    <img src="{{ asset('/assets/img/watches/'.$watchs->image) }}"  style='max-width:250px; max-height:250px'></dd>

    <dt class="col-sm-3">Brand</dt>
    <dd class="col-sm-9">{{$brands->name}}</dd>

{{--  <dt class="col-sm-3">Category</dt>--}}
{{--  <dd class="col-sm-9">{{$brands->name }}</dd>--}}

</dl>
