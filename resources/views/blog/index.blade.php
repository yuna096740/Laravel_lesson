@extends('layouts/app')
@section('title', 'ブログ一覧')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2 mx-auto mt-5">
    <h2>ブログ記事一覧</h2>
    <table class="table table-striped">
      <tr>
        <th>記事番号</th>
        <th>日付</th>
        <th>タイトル</th>
        <th>内容</th>
        <th></th>
      </tr>

      @foreach($blogs as $blog)
      <tr>
        <td>{{ $blog->id }}</td>
        <td>{{ $blog->updated_at }}</td>
        <td>{{ $blog->title }}</td>
        <td>{{ $blog->content }}</td>
        <td><a href="/blogs/{{ $blog->id }}">詳細</a></td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection