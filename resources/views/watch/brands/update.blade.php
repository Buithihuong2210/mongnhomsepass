@extends('master.watchMasterAdmin')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Brand</h1>


    @include('partials.errors')

    <form action="{{route('brands.update', ['id' => old('id')?? $brands->id])}}" method="post"
          enctype="multipart/form-data">
      @csrf
      @include('watch.brands.brandFields1')
      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
