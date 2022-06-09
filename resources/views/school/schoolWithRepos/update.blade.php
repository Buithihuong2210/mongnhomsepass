@extends('master.schoolMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Classroom</h1>


    @include('partials.errors')

    <form action="{{route('schoolrepos.update', ['id' => old('id')?? $classrooms->id])}}" method="post">
      @csrf
      @include('school.schoolWithRepos.classroomFields')

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
