@extends('master.schoolMaster')
@section('main')
  <div class="container">
    <h1 class="display-4">New Teacher</h1>
    @include('partials.errors')
    <form
      action="{{route('school.store1')}}"
      method="post">
      @csrf
{{--      <div class="form-group">--}}
{{--        <label for="id" class="font-weight-bold">#</label>--}}
{{--        <input type="text" class="form-control" id="id" name="id"--}}
{{--               value="{{old('id')}}"  >--}}
{{--      </div>--}}
      <div class="form-group">
        <label for="name" class="font-weight-bold">Name</label>
        <input type="text" class="form-control" id="name" name="name"
               value="{{old('name')}}">
      </div>

      <div class="form-group">
        <label for="dob" class="font-weight-bold">DOB</label>
        <input type="text" class="form-control" id="dob" name="dob"
               value="{{old('dob')}}">
      </div>

      <div class="form-group">
        <label for="ssid" class="font-weight-bold">SSID</label>
        <input type="number" class="form-control" id="ssid" name="ssid"
               value="{{old('ssid')}}">
      </div>

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
