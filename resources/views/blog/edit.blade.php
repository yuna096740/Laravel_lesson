@extends('layouts/app')
@section('title', 'ブログ編集')

@section('content')
<div class="row">
  <div class="col-md-4 col-md-offset-2 mx-auto mt-5">
    <h4>ブログ編集</h4>
    <form action="/blogs/{{ $blog->id }}" method="POST">
      @csrf
      @method('PUT')
      
      <p>記事番号: {{$blog->id}}</p>
      <p>{{$blog->updated_at}}</p>
      
      <div class="input-form">
        <label for="title">タイトル</label>
        <input name="title" value="{{ $blog->title }}"  class="form-control">
      </div>

      <div class="input-form">
        <label for="content">内容</label>
        <input name="content" value="{{ $blog->content }}"  class="form-control">
      </div>

      <div class="input-form">
        <input type="submit" value="Update" class="btn btn-success mt-3">
      </div>
    </form>
  </div>
</div>
@endsection