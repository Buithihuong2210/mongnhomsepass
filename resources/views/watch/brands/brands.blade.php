@extends('master.watchMasterAdmin')

@section('main')
  <div class="container">
    <br>
    <h1 class="text-center display-4" style="font-size: 40px"><b>BRAND MANAGER</b></h1>
    <br>
    @include('watch.brands.sessionmessage')
    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>
        {{--        <th scope="col">#</th>--}}
        <th scope="col">Name</th>
        <th scope="col">Image</th>
{{--        <th scope="col">Visible</th>--}}
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>

      </tr>
      </thead>
      <tbody>
      @foreach($brands as $b)
        <tr>

          <td>{{$b->name}}</td>

             <td><img src="{{ asset('/assets/img/brands/'.$b->image) }}"  style="max-width: 150px; max-height:150px"></td>

{{--          <td>{{$b->visible}}</td>--}}

          <td><a type="button" class="btn btn-info btn-sm"
                 href="{{route('brands.show', ['id' => $b->id])}}"
            >Details</a>
          </td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('brands.edit', ['id' => $b->id])}}"
            >Edit</a>
          </td>
          <td>

            <a type="button" class="btn btn-danger btn-sm"
               href="{{route('brands.confirm', ['id' => $b->id])}}"
            >Delete</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>

  </div>
@endsection

@section('script')
@endsection

