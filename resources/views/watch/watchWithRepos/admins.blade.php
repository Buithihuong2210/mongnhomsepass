@extends('master.watchMasterAdmin')

@section('main')
  <div class="container">
    <br>
    <h1 class="text-center display-4" style="font-size: 40px"><b>ADMIN MANAGER</b></h1>
    <br>
    @include('watch.watchWithRepos.sessionmessage')
    <table class="table table-hover">

      <thead class="thead-dark">
      <tr>
{{--                <th scope="col">#</th>--}}
        <th scope="col">Username</th>
{{--        <th scope="col">Password</th>--}}
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
{{--        <th scope="col">&nbsp;</th>--}}
      </tr>
      </thead>
      <tbody>
      @foreach($admins as $a)
        <tr>
{{--          <th scope="col"> {{$a -> id}}</th>--}}
          <td>{{$a->username}}</td>
{{--          <td>{{$a->password}}</td>--}}
          <td>{{$a->fullname}}</td>
          <td>{{$a->email}}</td>
          <td>{{$a->phone}}</td>
          <td><a type="button" class="btn btn-primary btn-sm"
                 href="{{route('watchrepos.show', ['id' => $a->id])}}"
            >Details</a>
          </td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('watchrepos.update', ['id' => $a->id])}}"
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
