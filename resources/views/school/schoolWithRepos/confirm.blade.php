@extends('master.schoolMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Are you sure you want to delete?</h1>
    @include('school.schoolWithRepos.classroomDetails')
    <form action="{{route('schoolrepos.destroy', ['id' =>$classrooms->id])}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$classrooms->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('schoolrepos.classrooms')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
