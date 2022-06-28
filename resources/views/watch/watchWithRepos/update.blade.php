@extends('master.watchMasterAdmin')
@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Admin</h1>
    @include('partials.errors')

    <form action="{{route('watchrepos.update', ['id' => old('id')?? $admins->id])}}" method="post">
      @csrf
      @include('watch.watchWithRepos.watchFields')
      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
{{--    <a type="button" href="{{route('watchrepos.admins')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>--}}
  </div>
@endsection
