@extends('layouts.main')
@section('content')
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">About Us</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="{{route('index')}}">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">About</p>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="row">
    <div class="col-md-4">
        <p>
            For most people, online shopping has played an important part in everyday life.</br>
             Online shopping is suitable for people who are too busy to go out or just enjoy the convenience of ordering things online. 
        </br>So I made this website to give you all of newest designs in 2022.
        </p>
    </div>
    <div class="col-md-8 d-flex justify-content-center">
        <table class="table table-hover">
            
                <tr>
                    <th scope="row">Website: <i class="fas fa-shopping-cart text-primary mr-3"></i></th>
                    <td><a href="{{route('index')}}"><b>Zelda-ModernDesign</b></a></td>
                </tr>
                <tr>
                    
                    <th scope="row">Address: <i class="fa fa-map-marker-alt text-primary mr-3"></th>
                   
                    <td><a href="https://www.google.com/maps/place/Kawasaki,+Kanagawa/@35.5564955,139.5022649,11z/data=!3m1!4b1!4m5!3m4!1s0x60185f7b01bd5057:0x88c9f317cacfd3cb!8m2!3d35.5308325!4d139.7029125"><b>Kawasaki,Kanagawa,Japan</b></a></td>
                </tr>
                <tr>
                    <th scope="row">Tel: <i class="fa fa-envelope text-primary mr-3"></i></th>
                    <td><a href="tel:+999999999"><b>(+84)99-999-9999</b></a></td>
                </tr>
                <tr>
                    <th scope="row">Email: <i class="fa fa-phone-alt text-primary mr-3"></i></th>
                    <td><a href="mailto:zelda.cbc@gmail.com"><b>zelda.cbc@gmail.com</b></a></td>
                </tr>
                

            
        </table>
    </div>

</div>
    
@endsection