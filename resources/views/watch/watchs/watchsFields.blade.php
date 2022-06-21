<input type="hidden" name="id" value="{{old('id')?? $watchs->id}}">
<div class="form-group">
  {{--<fieldset disabled>--}}
  <label for="name" class="font-weight-bold">Name</label>
  <input type="text" class="form-control" id="name" name="name" value="{{old('name')?? $watchs->name}}">
  {{--</fieldset>--}}
</div>

<div class="form-group">
  <label for="visible" class="font-weight-bold">Visible</label>
  <input type="text" class="form-control" id="visible" name="visible" value="{{old('visible')?? $watchs->visible}}">
</div>

<div class="form-group">
  <label for="price" class="font-weight-bold">Price</label>
  <input type="number" class="form-control" id="price" name="price" value="{{old('price')?? $watchs->price}}">
</div>

<div class="form-group">
  <label for="size" class="font-weight-bold">Size</label>
  <input type="number" class="form-control" id="size" name="size" min="0" value="{{old('size')?? $watchs->size}}">
</div>

<div class="form-group">
  <label for="material" class="font-weight-bold">Material</label>
  <input type="text" class="form-control" id="material" name="material" value="{{old('material')?? $watchs->material}}">
</div>

<div class="form-group">
  <label for="description" class="font-weight-bold">Description</label>
  <input type="text" class="form-control" id="description" name="description" value="{{old('description')?? $watchs->description}}">
</div>

<div class="form-group">
  <label for="color" class="font-weight-bold">Color</label>
  <input type="text" class="form-control" id="color" name="color" value="{{old('color')?? $watchs->color}}">
</div>


<div class="form-group">
  <label for="image_pro" class="font-weight-bold"> Image</label>
  <input type="file" name="file" id="file" value="{{old('image')?? $watchs->image}}">
</div>

@php
  $bId = old('brands') ?? $watchs->brandsId?? null;
@endphp
<div class="form-group">
  <label for="brands" class="font-weight-bold">Brand</label>
  <select name="brands" class="form-control" id="brands" required>
    <option value="0">Please select a brand</option>
    @foreach($brands as $b)
      <option value="{{ $b->id }}"
        {{ ($bId != null && $b->id == $bId) ? 'selected' : '' }}
      >{{ $b->name }}</option>
    @endforeach
  </select>
</div>
