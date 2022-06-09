<input type="hidden" name="id" value="{{old('id')?? $teachers->id}}">
<div class="form-group">
  <label for="name" class="font-weight-bold">Name</label>
  <input type="text" class="form-control" id="name" name="name" value="{{old('name')?? $teachers->name}}">
  {{--        when removing title value to trigger "required" validation, --}}
  {{--        old('title') is not set so $book['title'] is shown--}}
  {{--        it is because redirect()->back() calls edit() which provides $book for view--}}
</div>

<div class="form-group">
  <label for="dob" class="font-weight-bold">DOB</label>
  <input type="text" class="form-control" id="dob" name="dob" value="{{old('dob')?? $teachers->dob}}">
</div>

<div class="form-group">
  <label for="ssid" class="font-weight-bold">SSID</label>
  <input type="number" class="form-control" id="ssid" name="ssid" value="{{old('ssid')?? $teachers->ssid}}">
</div>

