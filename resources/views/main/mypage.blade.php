@extends('layouts.main')
@section('content')
<!--Page Header-->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="{{route('index')}}">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shop</p>
            <p class="m-0 px-2">-</p>
            <p>{{$user->name}}</p>
        </div>
    </div>
</div>
<!--End Page Header-->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Hello  {{$user->name}} </span></h2>
    </div>
    <div class="text-center mb-4">
        <h4 class="section-title px-5"><span class="px-2">Your Order's History</span></h4>
        <table class="table table-hover">
            <thead>
                <th>No</th>
                <th>Total</th>
                <th>Address</th>
                <th>Phone Numbers</th>
                <th>Payment</th>
                <th>Status</th>

            </thead>
            <tbody>
                @foreach ($order as $item)
                <tr>
                    <td>{{$index++}}</td>
                    <td>$<span style="color: red">{{$item->total}}</span></td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->phone_numbers}}</td>
                    <td>{{$item->payment}}</td>
                    <td>{{$item->status}}</td>
                </tr>
                    
                @endforeach

            </tbody>

        </table>
    </div>
    <div class="text-center mb-4">
        <h4 class="section-title px-5"><span class="px-2">Your information</span></h4>
        <table class="table table-hover">
            <thead>
                
                <th>Name</th>
                <th>Email</th>
               

            </thead>
            <tbody>
                <tr>                     
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>

            </tbody>

        </table>
    </div>
  
</div>
<!-- Categories End -->
   
    
@endsection