<dl class="row">
{{--  <dt class="col-sm-3">ID</dt>--}}
{{--  <dd class="col-sm-9">{{ $watchs->id }}</dd>--}}

  <dt class="col-sm-3">Name</dt>
  <dd class="col-sm-9">{{ $watchs->name }}</dd>

  <dt class="col-sm-3">Price (VND)</dt>
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
    <img src="{{ asset('/storage/watchs/'.$watchs->image) }}"  style='max-width:250px; max-height:250px'></dd>

    <dt class="col-sm-3">CategoriesId</dt>
    <dd class="col-sm-9">{{$watchs->categoriesId}}</dd>

{{--  <dt class="col-sm-3">Category</dt>--}}
{{--  <dd class="col-sm-9">{{$categories->name }}</dd>--}}

</dl>
