<dl class="row">
{{--  <dt class="col-sm-3">ID</dt>--}}
{{--  <dd class="col-sm-9">{{ $brands->id }}</dd>--}}

  <dt class="col-sm-3">Name</dt>
  <dd class="col-sm-9">{{ $brands->name }}</dd>

  <dt class="col-sm-3">Image</dt>
  <dd class="col-sm-9"><img src="{{asset('/assets/img/brands/'.$brands->image) }}" style='width:200px; height:150px'></dd>

{{--  <dt class="col-sm-3">Visible</dt>--}}
{{--  <dd class="col-sm-9">{{ $brands->visible }}</dd>--}}
</dl>
