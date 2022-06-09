@extends('master.schoolMaster')

@section('main')


  <div class="container">
    <p class="display-5"></p>
  </div>
  <div class="container border border-dark">
    <table class="table table-hover table-borderless">
      <p class="text-center" style="font-size: large"><b>TEACHER MANAGER</b></p>
      <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">DoB</th>
        <th scope="col">SSID</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>
      @foreach($teachers as $t)
        <tr>
          <th scope="row">{{$t['id']}}</th>
          <td>{{$t['name']}}</td>
          <td>{{$t['dob']}}</td>
          <td>{{$t['ssid']}}</td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('school.edit1', ['id' => $t['id']])}}"
            >Edit</a></td>
          <td><a type="button" class="btn btn-danger btn-sm"
{{--                 data-teachers="{{join('|', $t)}}"--}}

{{--                 data-toggle="modal" data-target="#deleteStudent"--}}
href="{{route('school.confirm1', ['id' => $t['id']])}}"
            >Delete</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>

    <div class="modal fade" tabindex="-1" id="deleteStudent" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Deleting A Student</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>


          <form id="deleteForm" method="post">
            @csrf
            <div class="modal-body">
              <fieldset disabled>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <input type="hidden" id="id" name="id">
                <div class="form-group">
                  <label for="dob">Start Date</label>
                  <input type="text" class="form-control" id="dob" name="dob">
                </div>

                <div class="form-group">
                  <label for="ssid">SSID</label>
                  <input type="number" class="form-control" id="ssid" name="ssid">
                </div>
              </fieldset>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary" value="Delete">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
          </form>

        </div>

      </div>
    </div>
  </div>

@endsection

@section('script')
  <script type="text/javascript">
    $('document').ready(function () {
      $('a[data-teachers]').on('click', function (evt) {
        let dData = $(this).attr('data-teachers').split("|");
        console.log(dData);
        $('#name').attr('value', dData[0]);
        $('#dob').attr('value', dData[1]);
        $('#ssid').attr('value', dData[2]);

        $('#deleteForm').attr('action', dData[3]);
      });
    });
  </script>
@endsection
