@extends('master.schoolMaster')

@section('main')


  <div class="container">
    <h1 class="display-4">Classroom Details</h1>
    @include('school.schoolWithRepos.teacherDetails')
    <a type="button" href="{{route('schoolrepos.teachers')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
  </div>
@endsection
