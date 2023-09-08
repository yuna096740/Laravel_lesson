@extends('layouts/layout')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <table class="table">
      <tr>
        <th>記事番号</th>
        <th>日付</th>
        <th>タイトル</th>
        <th>内容</th>
        <th></th>
      </tr>
    
      <tr>
        <td>{{$blog->id}}</td>
        <td>{{$blog->updated_at}}</td>
        <td>{{$blog->title}}</td>
        <td>{{$blog->content}}</td>
      </tr>
    </table>

    <a href="/">Edit</a>

    <a href="/">記事一覧へ戻る</a>
  </div>
</div>
@endsection