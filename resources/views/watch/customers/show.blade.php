@extends('master.watchMasterAdmin')

@section('main')


  <div class="container">
    <h1 class="display-4">DETAIL CUSTOMER</h1>
    @include('watch.customers.customerDetails')
    <a type="button" href="{{route('customers.customers')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
  </div>
@endsection
