@extends('Master.schoolMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Index</h1>
    @include('school.schoolWithRepos.sessionmessage')
    <table class="table table-hover">
      <p class="text-center" style="font-size: large"><b>CLASSROOM MANAGER</b></p>
      <thead class="thead-dark">
      <tr>
        {{--        <th scope="col">#</th>--}}
        <th scope="col">Name</th>
        <th scope="col">Start Date</th>
        <th scope="col">Size</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>
      @foreach($classrooms as $c)
        <tr>
          <td>{{$c->name}}</td>
          <td>{{$c->startDate}}</td>
          <td>{{$c->size}}</td>
          <td><a type="button" class="btn btn-primary btn-sm"
                 href="{{route('schoolrepos.show', ['id' => $c->id])}}"
            >Details</a>
          </td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('schoolrepos.update', ['id' => $c->id])}}"
            >Edit</a>
          </td>
          <td>

            <a type="button" class="btn btn-danger btn-sm"
               href="{{route('schoolrepos.confirm', ['id' => $c->id])}}"
            >Delete</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>

  </div>
@endsection

@section('script')
@endsection
