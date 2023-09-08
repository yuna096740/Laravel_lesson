@extends('layouts/layout')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <form action="/blogs/{{ $blog->id }}" method="POST">
      @csrf
      @method('PUT')

      {{$blog->id}}
      {{$blog->updated_at}}
      
      <label for="title">タイトル</label>
      <input name="title" value="{{ $blog->title }}">

      <label for="content">内容</label>
      <input name="content" value="{{ $blog->content }}">

      <input type="submit" value="Update" class="btn btn-success">
    </form>
  </div>
</div>
@endsection