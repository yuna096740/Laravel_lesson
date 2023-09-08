@extends('layouts/layout')
@section('title', 'ブログ作成')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="form">
        <form action="/blogs" method="POST">
          @csrf
          <div class="input-form">
            <label for="title">Title</label>
            <input name="title">
          </div>

          <div class="input-form">
            <label for="content">Title</label>
            <textarea name="content"></textarea>
          </div>

          <div class="input-form">
            <input type="submit" value="Submit">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection