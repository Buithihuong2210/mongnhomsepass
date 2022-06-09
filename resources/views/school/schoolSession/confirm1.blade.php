@extends('master.schoolMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Are you sure you want to delete?</h1>
    <dl class="row">
      <dt class="col-sm-3">ID</dt>
      <dd class="col-sm-9">{{ $teachers['id'] }}</dd>

      <dt class="col-sm-3">Name</dt>
      <dd class="col-sm-9">{{ $teachers['name'] }}</dd>

      <dt class="col-sm-3">DoB</dt>
      <dd class="col-sm-9">{{ $teachers['dob'] }}</dd>

      <dt class="col-sm-3">SSID</dt>
      <dd class="col-sm-9">{{$teachers['ssid'] }}</dd>

    </dl>

    <form action="{{route('school.destroy1', ['id' =>$teachers['id']])}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$teachers['id']}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('school.teacher')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
