<div class="row row-space">
  <div class="col-2">
    <div class="input-group">
      <label for="fullname" class="label">Full Name</label>
      <input type="text" class="input--style-4" id="fullname" name="fullname"
             value="{{old('fullname')?? $customers->fullname}}">
    </div>
  </div>
</div>
<div class="row row-space">
  <div class="col-2">
    <div class="input-group">
      <label for="dob" class="label">Date of Birth</label>
      <div class="input-group-icon">
        <input class="input--style-4 js-datepicker" type="date" name="dob" id="dob"
               value="{{old('dob')?? $customers->dob}}">
        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
      </div>
    </div>
  </div>
  <div class="col-2">
    <div class="input-group">
      <label for="gender" class="label">Gender</label>
{{--      <input class="input--style-4" value="{{old('gender')?? $customers->gender}}">--}}
            <div class="p-t-9">
              <label class="radio-container">Male
                <input type="radio" checked="checked" id="male" name="gender" value="{{old('gender')?? $customers->gender}}">
                <span class="checkmark"></span>
              </label>
              <label class="radio-container">Female
                <input type="radio" id="female" name="gender" value="{{old('gender')?? $customers->gender}}">
                <span class="checkmark"></span>
              </label>
              <label class="radio-container">Other
                <input type="radio" id="other" name="gender" value="{{old('gender')?? $customers->gender}}">
                <span class="checkmark"></span>
              </label>
            </div>

    </div>
  </div>
</div>
<div class="row row-space">
  <div class="col-2">
    <div class="input-group">
      <label for="email" class="label">Email</label>
      <input class="input--style-4" type="email" id="email" name="email" value="{{old('email')?? $customers->email}}">
    </div>
  </div>
  <div class="col-2">
    <div class="input-group">
      <label for="phone" class="label">Phone</label>
      <input class="input--style-4" type="text" id="phone" name="phone" value="{{old('phone')?? $customers->phone}}">
    </div>
  </div>
</div>
<div class="input-group">
  <label for="address" class="label">Address</label>
  <div>
    <input class="input--style-4" type="text" id="address" name="address"
           value="{{old('address')?? $customers->address}}">
  </div>
</div>
