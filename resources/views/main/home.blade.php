@extends('layouts.main')
@section('slide')  
<div id="header-carousel" class="carousel slide" data-ride="carousel" data-interval="2000">
    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 410px;">
            <img class="img-fluid" src="/images/carousel-1.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Modern Design?</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Welcome to Zelda</h3>
                    <a href="{{route('shop')}}" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="height: 410px;">
            <img class="img-fluid" src="/images/carousel-2.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Covid 19? Don't worry</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Delivery with 10% Off</h3>
                    <a href="{{route('shop')}}" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="height: 410px;">
            <img class="img-fluid" src="/images/slide-4.jpeg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Coupon: CBC2022</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">30% Off-for the first orders </h3>
                    <a href="{{route('shop')}}" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="height: 410px;">
            <img class="img-fluid" src="/images/slide-5.jpeg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">To become our</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Business Partner?</h3>
                    <a href="{{route('contact')}}" class="btn btn-light py-2 px-3">Contact Now</a>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n2"></span>
        </div>
    </a>
</div>
@endsection
@section('user.infor')
<div class="navbar-nav ml-auto py-0">
    <h3><a href="#" class="nav-item nav-link"><i class="fas fa-user-secret"></i> {{$user->name}}</a></h3> 
     <a href="{{Route('user.logout')}}" class="nav-item nav-link">Log out</a>
 </div>
@endsection
@section('nav.category')
<div class="col-lg-3 d-none d-lg-block">
    <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
        <h6 class="m-0">Newest Designs</h6>
        <i class="fa fa-angle-down text-dark"></i>
    </a>
    <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
        <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
            @foreach ($category as $item)
            <a href="/shop/category/{{$item->id}}" class="nav-item nav-link">{{$item->name}}</a>
            @endforeach
            
            

        
        </div>
    </nav>
</div>
@endsection
@section('content')
<div class="container-fluid py-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2"><span style="color:red">HOT</span> Products</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
               @foreach ($product_new as $item)
               
                <div class="vendor-item border p-4">
                    <a href="/shop/detail/{{$item->id}}">
                    <img src="/images/{{$item->images}}" alt="">
                </a>
                    <a href="/shop/detail/{{$item->id}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Categories</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                   
                    <a href="{{route('shop')}}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="/images/cat-1.jpg" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Men's</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                   
                    <a href="{{route('shop')}}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="/images/cat-2.jpg" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Women's</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                   
                    <a href="{{route('shop')}}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="/images/cat-3.jpg" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Childrent's </h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    
                    <a href="{{route('shop')}}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="/images/cat-6.jpg" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Shoes</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    
                    <a href="{{route('shop')}}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="/images/cat-5.jpg" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Bags</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->
    
    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->
    
    <!-- Subscribe Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="row justify-content-md-center py-5 px-xl-5">
            <div class="col-md-6 col-12 py-5">
                <div class="text-center mb-2 pb-2">
                    <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Stay Updated</span></h2>
                    <p>If you have any questions, please contact us : </p>
                </div>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-4" placeholder="Email Goes Here">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Just Arrived</span></h2>
        </div>
        
        <div class="row px-xl-5 pb-3">
            @foreach ($product_new as $item)
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                
                <div class="card product-item border-0 mb-4">
                    <a href="/shop/detail/{{$item->id}}">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                       <img class="img-fluid w-100" src="/images/{{$item->images}}" alt="">
                    </div>
                    </a>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{$item->name}}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>${{$item->price}}</h6><h6 class="text-muted ml-2"><del>$1555.00</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                       
                        <a href="/shop/detail/{{$item->id}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <input type="hidden" value="{{ $item->name }}" name="name">
                            <input type="hidden" value="{{ $item->price }}" name="price">
                            <input type="hidden" value="{{ $item->images }}"  name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="btn btn-sm text-dark p-0">Add To Cart</button>
                        </form>
                        
                    </div>
                </div>
            </div>
            @endforeach
            <div class="text align:center">
                <a href="{{route('shop')}}" class="btn btn-success">See More-></a>
            </div>
        </div>
       
    </div>
    <!-- Products End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="vendor-item border p-4">
                        <img src="/images/vendor-1.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="/images/vendor-2.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="/images/vendor-3.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="/images/vendor-4.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="/images/vendor-5.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="/images/vendor-6.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="/images/vendor-7.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="/images/vendor-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End --
@endsection