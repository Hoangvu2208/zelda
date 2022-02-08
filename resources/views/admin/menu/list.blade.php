@extends('admin.main')
<?php //var_dump($categories);?>
@section('content')
    <table class="table table-hover">
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Updated</th>
            <th>&nbsp;</th>
        </thead>
        <tbody>
            
            @foreach ($categories as $item)

               <tr> 
                <td>{{$index++}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->updated_at}}</td>
                <td style="width: 200px;">
                    <a class="btn btn-primary sm" href="/admin/menus/edit/{{$item->id}}">
                        <i class="far fa-edit"></i>
                    </a>
                    <a class="btn btn-danger sm" href="" onclick="deleteData({{$item->id}},'/admin/menus/destroy')">
                        <i class="far fa-trash-alt"></i>
                    </a>

                </td>
            </tr>
                
            @endforeach
        </tbody>
        <div class="card-footer">
            <a href="/admin/menus/add" class="btn btn-primary">Add</a>
        </div>
        
    </table>
@endsection