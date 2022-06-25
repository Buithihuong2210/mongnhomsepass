@extends('master.testMaster')
@section('main')
  <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
      <div class="card card-4">
        <div class="card-body">
          <h2 class="title"> <i class="bi bi-clipboard"></i> SIGN UP</h2>
          @include('partials.errors')
          <form action="{{route('customers.store')}}" method="POST">
            @csrf
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Full Name</label>
                  <input class="input--style-4" type="text" name="fullname">
                </div>
              </div>
            </div>
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Date of Birth</label>
                  <div class="input-group-icon">
                    <input class="input--style-4 js-datepicker" type="date" name="dob">
                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="input-group">
                  <label class="label">Gender</label>
                  <div class="p-t-9">
                    <label class="radio-container">Male
                      <input type="radio" id="male" checked="checked" name="male">
                      <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Female
                      <input type="radio" id="female" name="gender">
                      <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Other
                      <input type="radio" id="other" name="gender">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Email</label>
                  <input class="input--style-4" type="email" name="email">
                </div>
              </div>
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Phone</label>
                  <input class="input--style-4" type="text" name="phone">
                </div>
              </div>
            </div>
            <div class="input-group">
              <label class="label">Address</label>
              <div>
                <input class="input--style-4" type="text" name="address">
              </div>
            </div>
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <button class="btn btn--radius-2 btn--blue" type="submit"> <i class="bi bi-skip-end"></i>  SIGN UP</button>
                </div>
              </div>
              <div class="col-2">
                <div class="input-group">
                  <a class="btn btn--radius-2 btn--red" type="button" href="{{route('client.index')}}"> <i class="bi bi-x-square"></i>  CANCEL   </a>
                </div>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
