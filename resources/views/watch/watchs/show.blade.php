@extends('master.watchMaster')

@section('main')


  <div class="container">
    <h1 class="display-4"> DETAIL WATCH </h1>
    @include('watch.watchs.watchsDetails')
    <a type="button" href="{{route('watchs.watchs')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
  </div>
@endsection
