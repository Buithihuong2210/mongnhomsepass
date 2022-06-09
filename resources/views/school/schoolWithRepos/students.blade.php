@extends('Master.schoolMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Index</h1>
    @include('school.schoolWithRepos.sessionmessage')
    <table class="table table-hover">
      <p class="text-center" style="font-size: large"><b>STUDENT MANAGER</b></p>
      <thead class="thead-dark">
      <tr>
        {{--        <th scope="col">#</th>--}}
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>
      @foreach($students as $s)
        <tr>
          <td>{{$s->name}}</td>
          <td>{{$s->email}}</td>
          <td>{{$s->contact}}</td>
          <td><a type="button" class="btn btn-primary btn-sm"
                 href="{{route('schoolrepos.show1', ['id' => $s->id])}}"
            >Details</a>
          </td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('schoolrepos.update1', ['id' => $s->id])}}"
            >Edit</a>
          </td>
          <td>

            <a type="button" class="btn btn-danger btn-sm"
               href="{{route('schoolrepos.confirm1', ['id' => $s->id])}}"
            >Delete</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>

  </div>
@endsection

@section('script')
@endsection
