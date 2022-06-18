@extends('master.watchMasterAdmin')

@section('main')
  <div class="container">
    <br>
    <h1 class="text-center display-4" style="font-size: 40px"><b>CUSTOMER MANAGER</b></h1>
    <br>
    @include('watch.customers.sessionmessage')
    <table class="table table-hover">

      <thead class="thead-dark">
      <tr>
        {{--                <th scope="col">#</th>--}}
        <th scope="col">Full Name</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Gender</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>
      @foreach($customers as $c)
        <tr>
          {{--          <th scope="col"> {{$a -> id}}</th>--}}
          <td>{{$c->fullname}}</td>
          <td>{{$c->dob}}</td>
          <td>{{$c->address}}</td>
          <td>{{$c->phone}}</td>
          <td>{{$c->email}}</td>
          <td>{{$c->gender}}</td>
          <td><a type="button" class="btn btn-primary btn-sm"
                 href="{{route('customers.show', ['id' => $c->id])}}"
            >Details</a>
          </td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('customers.update', ['id' => $c->id])}}"
            >Edit</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>

  </div>
@endsection

@section('script')
@endsection
