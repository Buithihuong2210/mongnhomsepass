
<input type="hidden" name="id" value="{{old('id')?? $admins->id}}">
<div class="form-group">
{{--<fieldset disabled>--}}
  <label for="username" class="font-weight-bold">Username</label>
  <input type="text" class="form-control" id="username" name="username" value="{{old('username')?? $admins->username}}" readonly>
{{--</fieldset>--}}
</div>
<div class="form-group"  >
  <label for="password" class="font-weight-bold">Password</label>
  <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
</div>

<div class="form-group">
  <label for="fullname" class="font-weight-bold">Full Name</label>
  <input type="text" class="form-control" id="fullname" name="fullname" value="{{old('fullname')?? $admins->fullname}}">
</div>

<div class="form-group">
  <label for="email" class="font-weight-bold">Email</label>
  <input type="text" class="form-control" id="email" name="email" value="{{old('email')?? $admins->email}}">
</div>

<div class="form-group">
  <label for="phone" class="font-weight-bold">Phone</label>
  <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')?? $admins->phone}}">
</div>



