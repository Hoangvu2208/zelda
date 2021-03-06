
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> {{$title}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Zelda, The Coffee Shop ,cafe,coffee,vietnam,coffee vietnam " name="keywords">
    <meta content="Sell coffee, introduce" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/templates/main/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/templates/main/css/style.css" rel="stylesheet">
</head>

<body>
    
    <!-- Topbar Start -->
        <div class="container-fluid">
            <div class="row bg-secondary py-2 px-xl-5">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark" href="">FAQs</a>
                        <span class="text-muted px-2">|</span>
                        <a class="text-dark" href="">Help</a>
                        <span class="text-muted px-2">|</span>
                        <a class="text-dark" href="">Support</a>
                        
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark pl-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center py-3 px-xl-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <a href="{{route('index')}}" class="text-decoration-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Zelda</span>MD</h1>
                    </a>
                </div>
                <div class="col-lg-6 col-6 text-left">
                    <form action="{{route('search')}}" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for products" name="keyword">
                            <div class="input-group-append">
                                <span class=" form-control input-group-text bg-transparent text-primary">
                                   <button class="btn btn-primary sm"><i class="fas fa-search"></i></button> 
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-6 text-right">
                    <a href="{{route('cart.list')}}" class="btn border">
                        <i class="fas fa-shopping-cart text-primary"></i>
                        <span class="badge">{{ Cart::getTotalQuantity()}}</span>
                    </a>
                </div>
            </div>
        </div>
    <!-- Topbar End -->