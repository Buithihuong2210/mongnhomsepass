@extends('master.schoolMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Classroom</h1>
    @include('partials.errors')
    <form action="{{route('school.update', ['id' =>$classroom['id']])}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{old('id')?? $classroom['id']}}">
      <div class="form-group">
        <label for="name" class="font-weight-bold">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('name')?? $classroom['name']}}">
      </div>

      <div class="form-group">
        <label for="startDate" class="font-weight-bold">Start Date</label>
        <input type="text" class="form-control" id="startDate" name="startDate" value="{{old('startDate')?? $classroom['startDate']}}">
      </div>

      <div class="form-group">
        <label for="size" class="font-weight-bold">Size</label>
        <input type="number" class="form-control" id="size" name="size" value="{{old('size')?? $classroom['size']}}">
      </div>

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
