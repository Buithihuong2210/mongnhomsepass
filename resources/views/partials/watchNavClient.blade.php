<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#logo"><img src="{{asset('assets/img/navbar-logo2.png')}}" alt="" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item dropdown">
                    <a role="button" class="nav-link dropdown-toggle" href="{{route('client.brand')}}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                        Brands
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Casio</a>
                        <a class="dropdown-item" href="#">Certina</a>
                        <a class="dropdown-item" href="#">DW</a>
                        <a class="dropdown-item" href="#">Seiko</a>
                        <a class="dropdown-item" href="#">SR</a>
                        <a class="dropdown-item" href="#">Frederique</a>
                        <a class="dropdown-item" href="#">Orient</a>
                        <a class="dropdown-item" href="#">DW</a>
                        <a class="dropdown-item" href="#">Calvin-Klein</a>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                        Mens
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">New Arrivals</a>
                        <a class="dropdown-item" href="#">Best Sellers</a>
                        <a class="dropdown-item" href="#">Watches</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Womens
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">New Arrivals</a>
                        <a class="dropdown-item" href="#">Best Sellers</a>
                        <a class="dropdown-item" href="#">Watches</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Children
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">New Arrivals</a>
                        <a class="dropdown-item" href="#">Best Sellers</a>
{{--                        <div class="dropdown-divider"></div>--}}
                        <a class="dropdown-item" href="#">Watches</a>
                    </div>
                </li>

            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" >
                <button class="btn btn-outline-secondary my-2 my-sm-2" type="submit">Search</button>
            </form>
            <br>

            <div>
                <a type="button" class="btn btn-secondary btn-sm my-2 my-sm-0" style="margin-left: 3rem; padding: 0.5rem"
                   href="{{route('customers.create')}}">Sign up</a>
            </div>
        </div>
    </div>
</nav>
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Everyone!</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Us More</a>
    </div>
</header>
