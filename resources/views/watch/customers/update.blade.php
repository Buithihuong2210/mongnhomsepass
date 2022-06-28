@extends('master.watchMasterAdmin')
@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Customer</h1>
    @include('partials.errors')

    <form action="{{route('customers.update', ['id' => old('id')?? $customers->id])}}" method="post">
      @csrf
      @include('watch.customers.customerFields')
      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
{{--    <a type="button" href="{{route('customers.customers')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>--}}
  </div>
@endsection
