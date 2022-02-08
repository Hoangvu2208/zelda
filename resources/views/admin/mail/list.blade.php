@extends('admin.main')

@section('content')
    <table class="table table-hover">
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>&nbsp;</th>
        </thead>
        <tbody>
            
            @foreach ($mail as $item)

               <tr> 
                <td>{{$index++}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->subject}}</td>
                    <td>{{$item->message}}</td>

                
            </tr>
                
            @endforeach
        </tbody>
        <div class="card-footer">
            <a href="/admin/menus/add" class="btn btn-primary">Add</a>
        </div>
        
    </table>
@endsection