<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{route('client.index')}}"><img src="{{asset('assets/img/navbar-logo2.png')}}" alt="" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item dropdown">
                    <a role="button" class="nav-link dropdown-toggle"
{{--                       href="{{route('client.brand')}}"--}}
                       id="navbarDropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                        Brands
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      @foreach($brands as $b)
                      <a class="dropdown-item"
                         href="{{route('client.show', ['id' => $b->id])}}"
                      >{{$b->name}}</a>
                      @endforeach
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                        Mens
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('client.hello')}}">New Arrivals</a>
                        <a class="dropdown-item" href="{{route('client.hello')}}">Best Sellers</a>
                        <a class="dropdown-item" href="{{route('client.index')}}">Watches</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Womens
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('client.hello')}}">New Arrivals</a>
                        <a class="dropdown-item" href="{{route('client.hello')}}">Best Sellers</a>
                        <a class="dropdown-item" href="{{route('client.index')}}">Watches</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Children
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('client.hello')}}">New Arrivals</a>
                        <a class="dropdown-item" href="{{route('client.hello')}}">Best Sellers</a>
{{--                        <div class="dropdown-divider"></div>--}}
                        <a class="dropdown-item" href="{{route('client.index')}}">Watches</a>
                    </div>
                </li>

            </ul>
            <form class="form-inline" action="{{route('client.search')}}" method="get">
              @csrf
                <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search" >
                <button class="btn btn-outline-secondary my-2 my-sm-2" type="submit"><i class="bi bi-search"></i></button>
            </form>
            <br>

            <div>
                <a type="button" class="btn btn-secondary btn-sm my-2 my-sm-0" style="margin-left: 3rem; padding: 0.5rem"
                   href="{{route('customers.create')}}">SIGN UP</a>
            </div>
        </div>
    </div>
</nav>
