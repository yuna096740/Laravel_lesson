@extends('layouts/app')
@section('title', 'ブログ詳細')


@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2 mx-auto mt-5">
    <h4>ブログ詳細</h4>
    <table class="table">
      <tr>
        <th>記事番号</th>
        <th>日付</th>
        <th>タイトル</th>
        <th>内容</th>
        <th></th>
        <th></th>
      </tr>
    
      <tr>
        <td>{{$blog->id}}</td>
        <td>{{$blog->updated_at}}</td>
        <td>{{$blog->title}}</td>
        <td>{{$blog->content}}</td>
        <td>
          <a href="/blogs/{{ $blog->id }}/edit" class="btn btn-success">編集する</a>
        </td>
        <td>
          <form action="/blogs/{{$blog->id}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="delete">
            <button type="submit" name="" value="Delete" class="btn btn-danger">削除する</button>
          </form>
        </td>
      </tr>
    </table>
    <a href="/">記事一覧へ戻る</a>
  </div>
</div>
@endsection