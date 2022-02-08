@extends('admin.main')
@section('content')
<div class="container">
    <div class="">
        <table class="table table-hover ">
            <thead>
                <tr>
                    <th>User Name :</th>
                    <th>Address :</th>
                    <th>Phone :</th>
                    <th>Payment:</th>
                    <th>User ID :</th>
                </tr>
               
            </thead>
            <tr>
                <td>{{$order->username}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->phone_numbers}}</td>
                <td>{{$order->payment}}</td>
                <td>{{$order->user_id}}</td>       
            </tr>
        </table>
        
    </div>
    
    
</div>
<div class="">
    <h4 style="text-align: center; color : red;">Change Status</h4>
    <form action="/admin/orders/detail/{{$order->id}}" method="post">
        @csrf
        
        <select class="form-control" name="status" id="">
            <option value="Success" class="badge badge-success">Success</option>
            <option value="Waiting" class="badge badge-danger">Waiting</option>
        </select>
        <button type="submit" class="btn btn-success">Apply</button>
    </form>

</div>
    
@endsection