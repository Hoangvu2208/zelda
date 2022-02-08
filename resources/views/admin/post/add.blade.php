@extends('admin.main')
@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
<form method="post" action="" enctype="multipart/form-data">
    <div class="card-body">
      <div class="form-group">
        <label>Name of Post</label>
        <input type="text" class="form-control" name="title" placeholder="Enter title of post" required>
      </div>           
      <div class="form-group">
        <label for="description">Image</label>
        <input type="file" class="form-group" name="file_uploads" required> 
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control" rows="4" placeholder="Enter content of your post"></textarea>
      </div>
   </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Create</button>
      <a href="/admin/posts/list" class="btn btn-secondary">Cancel</a>
  </div>
    @csrf
  </form>

<!-- /.card -->
@endsection
@section('footer')
<script>
  // Replace the <textarea id="editor1"> with a CKEditor 4
  // instance, using default configuration.
  CKEDITOR.replace( 'content' );
</script>
    
@endsection