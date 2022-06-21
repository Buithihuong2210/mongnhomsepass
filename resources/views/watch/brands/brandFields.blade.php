<input type="hidden" name="id" value="{{old('id_brands')?? $brands->id}}">
<div class="form-group">
  <label for="name_cate" class="font-weight-bold">Name</label>
  <input type="text" class="form-control" id="name" name="name" value="{{old('name')?? $brands->name}}">
</div>
<div class="form-group">
  <label for="image_cate" class="font-weight-bold"> Image</label>
  <input type="file" name="file" id="file" value="{{old('image')?? $brands->image}}">
</div>

<div class="form-group">
  <label for="visible" class="font-weight-bold">Visible</label>
  <input type="text" class="form-control" id="visible" name="visible" value="{{old('visible')?? $brands->visible}}">
</div>
