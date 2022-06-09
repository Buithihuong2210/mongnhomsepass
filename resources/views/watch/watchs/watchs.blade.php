@extends('master.watchMaster')

@section('main')
  <div class="container">
    <br>
    <h1 class="text-center display-4" style="font-size: 40px"><b>WATCH MANAGER</b></h1>
    <br>
    @include('watch.watchs.sessionmessage')
    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>
        {{--                <th scope="col">#</th>--}}
        <th scope="col">Name</th>
        <th scope="col">Price (VND)</th>
        <th scope="col">Size</th>
        <th scope="col">Material</th>
        <th scope="col">Color</th>
        {{--        <th scope="col">Description</th>--}}
        <th scope="col">Image</th>
        {{--        <th scope="col">CategoriesId</th>--}}
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>

      </tr>
      </thead>
      <tbody>
      @foreach($watchs as $w)
        <tr>
          {{--          <th scope="col"> {{$a -> id}}</th>--}}
          <td>{{$w->name}}</td>
          <td>{{$w->price}}</td>
          <td>{{$w->size}}</td>
          <td>{{$w->material}}</td>
          <td>{{$w->color}}</td>
          {{--          <td>{{$p->description}}</td>--}}
          <td><img src="{{ asset('/storage/watchs/'.$w->image) }}"  style='max-width:250px; max-height:250px'></td>
          {{--          <td>{{$p->categoriesId}}</td>--}}


          <td><a type="button" class="btn btn-primary btn-sm"
                 href="{{route('watchs.show', ['id' => $w->id])}}"
            >Details</a>
          </td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('watchs.update', ['id' => $w->id])}}"
            >Edit</a>
          </td>
          <td><a type="button" class="btn btn-danger btn-sm"
                 href="{{route('watchs.confirm', ['id' => $w->id])}}"
            >Delete</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>

  </div>
@endsection

@section('script')
@endsection
