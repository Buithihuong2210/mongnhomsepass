<input type="hidden" name="id" value="{{old('id')?? $classrooms->id}}">
<div class="form-group">
  <label for="name" class="font-weight-bold">Name</label>
  <input type="text" class="form-control" id="name" name="name" value="{{old('name')?? $classrooms->name}}">
  {{--        when removing title value to trigger "required" validation, --}}
  {{--        old('title') is not set so $book['title'] is shown--}}
  {{--        it is because redirect()->back() calls edit() which provides $book for view--}}
</div>

<div class="form-group">
  <label for="startDate" class="font-weight-bold">Start Date</label>
  <input type="text" class="form-control" id="startDate" name="startDate" value="{{old('startDate')?? $classrooms->startDate}}">
</div>

<div class="form-group">
  <label for="size" class="font-weight-bold">Size</label>
  <input type="number" class="form-control" id="size" name="size" min="0" value="{{old('size')?? $classrooms->size}}">
</div>

