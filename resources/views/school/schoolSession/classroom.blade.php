@extends('master.schoolMaster')

@section('main')

  <div class="container">
    <p class="display-5"> </p>
  </div>
  <div class="container border border-dark">
    <table class="table table-hover table-borderless">
      <p class="text-center" style="font-size: large"><b>STUDENT MANAGER</b></p>
      <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Start Date</th>
        <th scope="col">Size</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>
      @foreach($classrooms as $c)
        <tr>
          <th scope="row">{{$c['id']}}</th>
          <td>{{$c['name']}}</td>
          <td>{{$c['startDate']}}</td>
          <td>{{$c['size']}}</td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('school.edit', ['id' => $c['id']])}}"
            >Edit</a></td>

          <td><a type="button" class="btn btn-danger btn-sm"
                 href="{{route('school.confirm', ['id' => $c['id']])}}"
{{--                 href="{{route('c.confirm', ['id' => $b['id']])}}"--}}
{{--                 data-classrooms="{{join('|', $c)}}"--}}
{{--                 data-toggle="modal" data-target="#deleteStudent"--}}
            >Delete</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>

    <div class="modal fade" tabindex="-1" id="deleteStudent" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Create/ Update</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>


          <form id="deleteForm" method="post">
            @csrf
            <div class="modal-body">
              <fieldset disabled>

                <input type="hidden" id="id" name="id">

                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                  <label for="startDate">Start Date</label>
                  <input type="text" class="form-control" id="startDate" name="startDate">
                </div>

                <div class="form-group">
                  <label for="contact">Size</label>
                  <input type="number" class="form-control" id="size" name="size">
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
      $('a[data-classrooms]').on('click', function (evt) {
        let dData = $(this).attr('data-classrooms').split("|");
        console.log(dData);
        $('#id').attr('value', dData[0]);
        $('#name').attr('value', dData[1]);
        $('#startDate').attr('value', dData[2]);
        $('#size').attr('value', dData[3]);
        $('#deleteForm').attr('action', dData[4]);
      });
    });
  </script>


@endsection
