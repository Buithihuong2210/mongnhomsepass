@extends('master.schoolMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">New Student</h1>
    {{--    {{var_dump(\Illuminate\Support\Facades\Session::all())}}--}}
    @include('partials.errors')

    <form action="{{route('schoolrepos.store1')}}" method="post">
      @csrf
      @include('school.schoolWithRepos.studentFields')
      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
