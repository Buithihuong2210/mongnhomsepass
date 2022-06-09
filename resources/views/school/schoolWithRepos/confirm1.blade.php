@extends('master.schoolMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Are you sure you want to delete?</h1>
    @include('school.schoolWithRepos.studentDetails')
    <form action="{{route('schoolrepos.destroy1', ['id' =>$students->id])}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$students->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('schoolrepos.students')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
