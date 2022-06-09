@extends('master.schoolMaster')
@section('main')
  <div class="container">
    <h1 class="display-4">New Student</h1>
  @include('partials.errors')
    <form
      action="{{route('school.store')}}"
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
        <label for="startDate" class="font-weight-bold">Start Date</label>
        <input type="text" class="form-control" id="startDate" name="startDate"
               value="{{old('startDate')}}">
      </div>

      <div class="form-group">
        <label for="size" class="font-weight-bold">Size</label>
        <input type="number" class="form-control" id="size" name="size"
               value="{{old('size')}}">
      </div>

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
