@extends('master.schoolMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Teacher</h1>
    @include('partials.errors')
    <form action="{{route('school.update1', ['id' =>$teachers['id']])}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{old('id')?? $teachers['id']}}">
      <div class="form-group">
        <label for="name" class="font-weight-bold">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('name')?? $teachers['name']}}">
      </div>

      <div class="form-group">
        <label for="dob" class="font-weight-bold">DoB</label>
        <input type="text" class="form-control" id="dob" name="dob" value="{{old('dob')?? $teachers['dob']}}">
      </div>

      <div class="form-group">
        <label for="ssid" class="font-weight-bold">SSID</label>
        <input type="number" class="form-control" id="ssid" name="ssid" value="{{old('ssid')?? $teachers['ssid']}}">
      </div>

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
