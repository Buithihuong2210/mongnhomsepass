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
                  <input class="input--style-4" type="text" name="fullname" value="{{old('fullname')?? $customers->fullname}}">
                </div>
              </div>
            </div>
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label" >Date of Birth</label>
                  <div class="input-group-icon">
                    <input class="input--style-4 js-datepicker"  type="date" name="dob" value="{{old('dob')?? $customers->dob}}">
                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="input-group">
                  <label for="gender" class="label">Gender</label>
                  <div class="p-t-9">
                    <select name="gender" id="gender" class="radio-container" style="height: 3.5rem " value="{{old('dob')?? $customers->gender}}">
                      <option value="choose"selected="selected" style="text-align: center"> -- Choice -- </option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Email</label>
                  <input class="input--style-4" type="email" name="email" value="{{old('email')?? $customers->email}}">
                </div>
              </div>
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Phone</label>
                  <input class="input--style-4" type="text" name="phone" value="{{old('phone')?? $customers->phone}}">
                </div>
              </div>
            </div>
            <div class="input-group">
              <label class="label">Address</label>
              <div>
                <input class="input--style-4" type="text" name="address" value="{{old('address')?? $customers->address}}">
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
                  <a class="btn btn--radius-2 btn--red" type="button" href="{{route('client.index')}}"> <i class="bi bi-x-square"></i>CANCEL</a>
                </div>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
