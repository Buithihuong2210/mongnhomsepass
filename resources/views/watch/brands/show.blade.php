@extends('master.watchMasterAdmin')

@section('main')

  <div class="container">
    <h1 class="display-4">Category Details</h1>
    @include('watch.brands.brandDetails')
    <a type="button" href="{{route('brands.brands')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
  </div>
@endsection

