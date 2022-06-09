<dl class="row">
{{--  <dt class="col-sm-3">ID</dt>--}}
{{--  <dd class="col-sm-9">{{ $brands->id }}</dd>--}}

  <dt class="col-sm-3">Name</dt>
  <dd class="col-sm-9">{{ $brands->name }}</dd>

  <dt class="col-sm-3">Image</dt>
  <dd class="col-sm-9"><img src="{{ asset('/storage/brands/'.$brands->image) }}" style='max-width:200px; max-height:200px'></dd>

</dl>
