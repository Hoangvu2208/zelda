@extends('admin.main')

@section('content')
     <!-- form start -->
     <form method="post" action="">
        <div class="card-body">
          <div class="form-group">
            <label>Name of Category</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name of Category">
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Create</button>
          <a href="/admin/menus/list" class="btn btn-secondary">Cancel</a>
        </div>
        @csrf
      </form>
    </div>
    <!-- /.card -->
    @endsection
    