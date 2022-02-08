@extends('admin.main')
@section('content')
    <table class="table table-hover">
        <thead>
            <th>No</th>
            <th>Title</th>
            <th style="text-align: center;">Image</th>
            <th>&nbsp;</th>
       
        </thead>
        <tbody>
           @foreach ($posts as $item)
           <tr>
            <td>{{$index++}}</td>
            <td>{{$item->title}}<td>
            <td><img src="/images/{{$item->image}}" width="50px"></td>
            <td style="width: 150px;">
                <a class="btn btn-primary sm" href="/admin/posts/edit/{{$item->id}}">
                    <i class="far fa-edit"></i>
                </a>
                <a class="btn btn-danger sm" href="" onclick="deleteData({{$item->id}},'/admin/posts/destroy')">
                    <i class="far fa-trash-alt"></i>
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