@extends('master.schoolMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Are you sure you want to delete?</h1>
    <dl class="row">
      <dt class="col-sm-3">ID</dt>
      <dd class="col-sm-9">{{ $classrooms['id'] }}</dd>

      <dt class="col-sm-3">Title</dt>
      <dd class="col-sm-9">{{ $classrooms['name'] }}</dd>

      <dt class="col-sm-3">Author</dt>
      <dd class="col-sm-9">{{ $classrooms['startDate'] }}</dd>

      <dt class="col-sm-3">Pages</dt>
      <dd class="col-sm-9">{{$classrooms['size'] }}</dd>

    </dl>

    <form action="{{route('school.destroy', ['id' =>$classrooms['id']])}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$classrooms['id']}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('school.classroom')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
