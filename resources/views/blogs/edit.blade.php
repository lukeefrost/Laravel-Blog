@extends('layouts.app')

@section('content')
<form method="{{ route('blogs.update', $blog->id) }}" method="POST">
  {{ csrf_field() }}
  {{ method_field('PUT') }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" value="{{ $blog->title}}">
  </div>

  <div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" rows="10" class="form-control">{{$blog->content}}</textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-outline-primary">Edit Blog Post</button>
  </div>


</form>

@endsection
