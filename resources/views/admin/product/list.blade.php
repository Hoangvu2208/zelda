@extends('admin.main')
@section('content')
<?php// var_dump($categories);?>
    <table class="table table-hover">
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Images</th>
            <th>Category</th>
            <th>Price</th>
            <th>Updated at</th>
            <th>&nbsp;</th>
        </thead>
        <tbody>
           
            @foreach ($products as $item)
            <tr>
            <td>{{$index++}}</td>
            <td>{{$item->name}}</td>
            <td><img src="/images/{{$item->images}}" width="75"></td>
            <td>{{$item->category->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->updated_at}}</td>

                <td style="width: 150px;">
                    <a class="btn btn-primary sm" href="/admin/products/edit/{{$item->id}}">
                        <i class="far fa-edit"></i>
                    </a>
                    <a class="btn btn-danger sm" href="#" onclick="deleteData({{$item->id}},'/admin/products/destroy')">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <div class="card-footer">
            <a href="/admin/products/add" class="btn btn-primary">Add</a>
        </div>

    </table>
    {{$products->links('pagination::bootstrap-4')}}
    
@endsection