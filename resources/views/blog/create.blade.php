@extends('layouts/app')
@section('title', 'ブログ作成')

@section('content')
  <div class="row">
    <div class="col-md-4 col-md-offset-2 mx-auto mt-5">
      <h4>ブログ作成</h4>
      <div class="form">
        <form action="/blogs" method="POST">
          @csrf
          <div class="input-form">
            <label for="title">Title</label>
            <input name="title" class="form-control">
          </div>

          <div class="input-form">
            <label for="content">Title</label>
            <textarea name="content" class="form-control"></textarea>
          </div>

          <div class="input-form">
            <input type="submit" value="Submit" class="btn btn-info mt-3">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection