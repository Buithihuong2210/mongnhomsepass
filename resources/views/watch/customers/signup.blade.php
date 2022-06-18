@extends('master.testMaster')

@section('main')
  <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
      <div class="card card-4">
        <div class="card-body">
          <h2 class="title">SIGN UP</h2>
          @include('partials.errors')
          <form action="{{route('customers.store')}}" method="post">
            @csrf
            @include('watch.customers.customerFields1')
            <button type="submit" class="btn btn--radius-2 btn--blue">Sign up</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
