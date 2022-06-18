@extends('master.watchMasterAdmin')

@section('main')
  <div class="container">
    <h1 class="display-4">New Brand</h1>
    @include('partials.errors')
    <form action="{{route('brands.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      @include('watch.brands.brandFields')
      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
