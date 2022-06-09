@extends('master.schoolMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Teacher</h1>


    @include('partials.errors')

    <form action="{{route('schoolrepos.update2', ['id' => old('id')?? $teachers->id])}}" method="post">
      @csrf
      @include('school.schoolWithRepos.teacherFields')

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
