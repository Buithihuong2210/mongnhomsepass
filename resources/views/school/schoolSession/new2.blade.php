@extends('master.schoolMaster')
@section('main')
  <div class="container">
    <h1 class="display-4">New Student</h1>
    @include('partials.errors')
    <form
      action="{{route('school.store2')}}"
      method="post">
      @csrf
{{--      <div class="form-group">--}}
{{--        <label for="id" class="font-weight-bold">#</label>--}}
{{--        <input type="text" class="form-control" id="id" name="id"--}}
{{--               value="{{old('id')}}"  >--}}
{{--      </div>--}}
      <div class="form-group">
        <label for="name" class="font-weight-bold">Name</label>
        <input type="text" class="form-control" id="name" name="name"
               value="{{old('name')}}">
      </div>

      <div class="form-group">
        <label for="email" class="font-weight-bold">E-mail</label>
        <input type="text" class="form-control" id="email" name="email"
               value="{{old('email')}}">
      </div>

      <div class="form-group">
        <label for="contact" class="font-weight-bold">Contact</label>
        <input type="number" class="form-control" id="contact" name="contact"
               value="{{old('contact')}}">
      </div>

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
