@extends('master.watchMasterAdmin')

@section('main')


  <div class="container">
    <h1 class="display-4">DETAIL ADMIN</h1>
    @include('watch.watchWithRepos.adminDetails')
    <a type="button" href="{{route('watchrepos.admins')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
  </div>
@endsection
