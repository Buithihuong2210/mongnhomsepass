@extends('Master.schoolMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Index</h1>
    @include('school.schoolWithRepos.sessionmessage')
    <table class="table table-hover">
      <p class="text-center" style="font-size: large"><b>TEACHER MANAGER</b></p>
      <thead class="thead-dark">
      <tr>
        {{--        <th scope="col">#</th>--}}
        <th scope="col">Name</th>
        <th scope="col">DOB</th>
        <th scope="col">SSID</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>
      @foreach($teachers as $t)
        <tr>
          <td>{{$t->name}}</td>
          <td>{{$t->dob}}</td>
          <td>{{$t->ssid}}</td>
          <td><a type="button" class="btn btn-primary btn-sm"
                 href="{{route('schoolrepos.show2', ['id' => $t->id])}}"
            >Details</a>
          </td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('schoolrepos.update2', ['id' => $t->id])}}"
            >Edit</a>
          </td>
          <td>

            <a type="button" class="btn btn-danger btn-sm"
               href="{{route('schoolrepos.confirm2', ['id' => $t->id])}}"
            >Delete</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>

  </div>
@endsection

@section('script')
@endsection
