@extends('master.watchMasterAdmin')

@section('main')
  <div class="container">
    <h1 class="display-4">Are you sure you want to delete?</h1>
    @include('watch.brands.brandDetails')

    <form action="{{route('brands.destroy', ['id' =>$brands->id])}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$brands->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('brands.brands')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
