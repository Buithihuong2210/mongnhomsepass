@extends('master.schoolMaster')

@section('main')


  <div class="container">
    <h1 class="display-4">Student Details</h1>
    @include('school.schoolWithRepos.studentDetails')
    <a type="button" href="{{route('schoolrepos.students')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
  </div>
@endsection
