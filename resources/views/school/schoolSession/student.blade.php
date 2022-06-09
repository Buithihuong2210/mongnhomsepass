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
          <th scope="col">Email</th>
          <th scope="col">Contact</th>
          <th scope="col">&nbsp;</th>
          <th scope="col">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $s)
          <tr>
            <th scope="row">{{$s['id']}}</th>
            <td>{{$s['name']}}</td>
            <td>{{$s['email']}}</td>
            <td>{{$s['contact']}}</td>
            <td><a type="button" class="btn btn-success btn-sm"
                   href="{{route('school.edit2', ['id' => $s['id']])}}"
              >Edit</a></td>
            <td><a type="button" class="btn btn-danger btn-sm"
{{--                   data-smile="{{join('|', $s)}}"--}}
{{--                   --}}{{-- . "|" . route('book.destroy', ['id' => $b['id']])}}"--}}
{{--                   data-toggle="modal" data-target="#deleteStudent"--}}
href="{{route('school.confirm2', ['id' => $s['id']])}}"
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
              <input type="hidden" id="id" name="id">
              <div class="modal-body">
                <fieldset disabled>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>

                  <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="number" class="form-control" id="contact" name="contact">
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
      $('a[data-smile]').on('click', function (evt) {
        let dData = $(this).attr('data-smile').split("|");
        console.log(dData);
        $('#name').attr('value', dData[0]);
        $('#email').attr('value', dData[1]);
        $('#contact').attr('value', dData[2]);
        $('#deleteForm').attr('action', dData[3]);
      });
    });
  </script>
@endsection
