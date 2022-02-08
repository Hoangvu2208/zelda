@extends('layouts.main')
@section('content')
    <h2 class="card-title" style="text-align: center;color:red;">Hello {{$user->name}}</h2>
    <div class="container">
        <table class="table table-hover sm">
            <thead>
                <tr>
                <th>Product name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
               
                
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td><img src="/images/{{$item->attributes->image}}" style="width: 100px;height:100px" alt=""></td>
                    <td>$ {{$item->price}}</td>
                    <td>{{$item->quantity}}</td>
                    
  
                </tr>
                @endforeach
                <th>Total money</th>
                <td>$ <span style="color: red">{{ Cart::getTotal() }}</span></td>
            </tbody>
            

        </table>

        <form action="{{route('checkout')}}" class="was-validated" method="post">

            @csrf
            <input type="hidden" value="{{$cartItems}}" name="content">
            <input type="hidden" value="{{Cart::getTotal()}}" name="total">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" id="uname"  name="name" value="{{$user->name}}" required>
              <div class="valid-feedback">Ok</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
              <label for="pwd">Address:</label>
              <input type="text" class="form-control" placeholder="Enter address" name="address" required>
              <div class="valid-feedback">Ok.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="phone">Phone Numbers:</label>
                <input type="number" class="form-control" placeholder="Enter Phone Numbers" name="phone_numbers" required>
                <div class="valid-feedback">Ok.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group">
                <label for="payment">Payment:</label>
                <select class="form-group" name="payment" id="">
                    <option class="form-group" value="Cod">COD</option>
                    <option class="form-group" value="Credit">Credit cards</option>
                </select>
                <div class="valid-feedback">Ok.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="check" required> I agree with website's policy.
                <div class="valid-feedback">Ok</div>
                <div class="invalid-feedback">Read and check this checkbox to continue.</div>
              </label>
            </div>
            <button type="submit" class="btn btn-success">Apply</button> 
          </form>
    </div>
@endsection