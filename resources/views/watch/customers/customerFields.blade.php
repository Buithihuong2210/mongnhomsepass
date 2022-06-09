
<input type="hidden" name="id" value="{{old('id')?? $customers->id}}">

<div class="form-group">
  <label for="fullname" class="font-weight-bold">Full Name</label>
  <input type="text" class="form-control" id="fullname" name="fullname" value="{{old('fullname')?? $customers->fullname}}">
</div>

<div class="form-group">
  <label for="dob" class="font-weight-bold">Date of Birth</label>
  <input type="text" class="form-control" id="dob" name="dob" value="{{old('dob')?? $customers->dob}}">
</div>
<div class="form-group">
  <label for="address" class="font-weight-bold">Address</label>
  <input type="text" class="form-control" id="address" name="address" value="{{old('address')?? $customers->address}}">
</div>
<div class="form-group">
  <label for="phone" class="font-weight-bold">Phone</label>
  <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')?? $customers->phone}}">
</div>

<div class="form-group">
  <label for="email" class="font-weight-bold">Email</label>
  <input type="text" class="form-control" id="email" name="email" value="{{old('email')?? $customers->email}}">
</div>

<div class="form-group">
  <label for="gender" class="font-weight-bold">Gender</label>
  <input type="text" class="form-control" id="gender" name="gender" value="{{old('gender')?? $customers->gender}}">
</div>



