@extends('master.schoolMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Student</h1>


    @include('partials.errors')

    <form action="{{route('schoolrepos.update1', ['id' => old('id')?? $students->id])}}" method="post">
      @csrf
      @include('school.schoolWithRepos.studentFields')

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
