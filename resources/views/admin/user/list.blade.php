@extends('admin.main')
@section('content')
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
            <th>No</th>
            <th>Name</th>
            <th> Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
            <tr>
                <td>{{$index++}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
            </tr>
            @endforeach

        </tbody>

    </table>
@endsection