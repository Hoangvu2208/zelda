@extends('admin.main')
@section('content')
<table class="table table-hover">
    <thead>
        <th>No</th>
        <th>Name</th>
        <th>User_id</th>
        <th>Status</th>
        <th>&nbsp;</th>
        
   
    </thead>
    <tbody>
       @foreach ($orders as $item)
       <tr>
        <td>{{$index++}}</td>
        <td>{{$item->username}}</td>
        <td>{{$item->user_id}}</td>
        <td><span class="badge badge-danger">{{$item->status}}</span></td>

        <td style="width: 150px;">
            <a class="btn btn-primary sm" href="/admin/orders/edit/{{$item->id}}">
                <i class="fas fa-eye"></i>
            </a>
            
        </td>
        </tr>
       @endforeach
    </tbody>
    <div class="card-footer">
        <a href="/admin/posts/add" class="btn btn-primary">Add</a>
    </div>
</table>
@endsection