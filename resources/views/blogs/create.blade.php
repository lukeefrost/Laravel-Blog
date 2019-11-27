@extends('layouts.app')

@section('content')
<form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">

  <div class="form-group">
    {{ csrf_field() }}
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control">
  </div>

  <div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" rows="10" class="form-control"></textarea>
  </div>

  <div class="form-group">
    <input type="file" name="images" class="form-control">
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-outline-primary">Add Blog Post</button>
  </div>


</form>

@endsection
