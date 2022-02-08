
    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
           @yield('nav.category')
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Zelda</span>MD</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{route('index')}}" class="nav-item nav-link ">Home</a>
                            <a href="{{route('shop')}}" class="nav-item nav-link ">Shop</a>
                            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                        <a href="{{route('about')}}" class="dropdown-item">Shop</a>
                                        <a href="{{route('author')}}" class="dropdown-item">Author</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="{{route('cart.list')}}" class="dropdown-item">Shopping Cart</a>
                                    <a href="{{route('order.list')}}" class="dropdown-item">Checkout</a>
                                    <a href="{{route('mypage')}}" class="dropdown-item">My Page</a>
                                </div>
                            </div>
                            <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                        </div>
                       @yield('user.infor')
                    </div>
                    
                </nav>
                @yield('slide')
            </div>
        </div>
    </div>
    <!-- Navbar End -->