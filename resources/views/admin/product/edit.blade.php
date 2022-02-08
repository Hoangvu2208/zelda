@extends('admin.main')
@section('head')

@endsection
@section('content')
     <!-- form start -->
     <form method="post" action="" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label>Name of product</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name of product" value="{{$product->name}}" required>
          </div>
          <div class="form-group">
            <label >Categories</label>
            <select name="category_id" id="" class="form-control">
                @foreach ($category as $item)
                <option class="form-control" value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="price" placeholder="Enter price" value="{{$product->price}}" required>
          </div>
          <div class="form-group">
              <img src="/images/{{$product->images}}" width="100px">
            <label for="description">Image</label>
            <input type="file" class="form-group" name="file_uploads"> 
          </div>
          <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="4" placeholder="Enter Content"></textarea>
          </div>
       </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="/admin/products/list" class="btn btn-secondary">Cancel</a>
        </div>
        @csrf
      </form>
    </div>
    <!-- /.card -->
    
    
@endsection
@section('footer')

    
@endsection